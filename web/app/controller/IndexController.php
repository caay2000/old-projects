<?php

	use Doctrine\Tests\Common\Annotations\True;

	class IndexController extends Controller{
		
		private $reservaService;
		private $mailService;
		
		function __construct(){
			$this->reservaService = ReservaService::getInstance();
			$this->mailService = MailService::getInstance();
		}
		
		function index(){
			$view = new View('index');
			
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$array = array();
			if(isset($_POST['from']) && strlen($_POST['from'])>10 && isset($_POST['to']) && strlen($_POST['to'])>10){
				$array = $this->reservaService->getApartamentsReservats($_POST['from'], $_POST['to']);
			}
			$view->add('reservats', $array);
			if(isset($_POST['num_pax'])) $view->add('num_pax', $_POST['num_pax']);
			
			$preus = $this->reservaService->getPreusDesde();
			$view->add('preus', $preus);
			
			return $view;
		}	
	
		function login(){
			$view = new View('login');
			return $view;
		}
		
 		function apartament($id){
 			if(!isset($id[0])) $id[0] = 0;
 			if($id[0] < 0 || $id[0] > MAX_NUM_APT) return new View('redirect:');
 			$view = new View('apartament');
 			$reserves = $this->reservaService->getReservesRestantsByApartament($id[0]);
			
 			$preus = $this->reservaService->getPreusApartament($id[0]);
 			$view->add('preus', $preus);
			
 			$detalls = $this->reservaService->getDetallsApartament($id[0]);
 			$view->add('detalls', $detalls);
			
 			$oferta = $this->reservaService->getOfertaApartament($id[0]);
 			$view->add('ofertes', $oferta);

 			$entrades = json_encode(array());
 			if(isset($reserves['entrades'])) $entrades = json_encode($reserves['entrades']);
 			$sortides = json_encode(array());
 			if(isset($reserves['sortides'])) $sortides = json_encode($reserves['sortides']);

 			$view->add('reserves', json_encode($reserves['reserves']));
 			$view->add('entrades', $entrades);
 			$view->add('sortides', $sortides);
 			$view->add('id_apt', $id[0]);
 			return $view;
 		}
		
		function contacte(){
			
			$result = array("result"=>Locales::__getKey('email_ko'));
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if($this->validaParam('nombre') && $this->validaParam('email') && $this->validaParam('text')){
				$body = $this->getEmailBody($_POST);
				$mail = $this->mailService->sendMail(MAIL_TO, "reserva apartmentgrocbarcelona.com", $body);
				
				if($mail == true) $result['result'] = Locales::__getKey('email_ok');
			}
			
			return new JSONView(json_encode($result));
		}
		
		private function validaParam($param){
			if(isset($_POST[$param]) && strlen($_POST[$param])>0) return TRUE;
			return FALSE;
		}
		
		private function valida($param){
			if(isset($param) && strlen($param)>0) return TRUE;
			return FALSE;
		}
		
		private function getEmailBody($dades){
			$body = "";
			$body.= "<h1>CONSULTA APARTAMENTO GROC</h1>";
			$body.= "<p>Email de ".$dades['nombre'].", con email : ".$dades['email']."</p>";
			$body.= "<p>Visualizando el apartamento ".Locales::__getKey('apt'.$dades['id'])."</p>";
			if($this->valida($dades['telf'])){ $body.= "<p>El tel?fono es : ".$dades['telf']."</p>"; }
			if($this->valida($dades['from'])||$this->valida($dades['to'])){	$body.= "<p>Las fechas que solicitan son: entrada el ".$dades['from']." y salida el ".$dades['to'].".</p>";}
			if($this->valida($dades['num_pax']) && $dades['num_pax'] > 0){	$body.= "<p>El n?mero de personas que informa es de : ".$dades['num_pax']."</p>"; }
			$body.= "<p>El texto de ".$dades['nombre']." es el siguiente : </p>";
			$body.= $dades['text'];
			return $body;
		}
		
	}


