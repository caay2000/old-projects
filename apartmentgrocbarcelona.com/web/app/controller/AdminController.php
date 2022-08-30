<?php
	class AdminController extends Controller{
		
		private $reservaService;
		
		function __construct(){
			$this->reservaService = ReservaService::getInstance();
		}
		
		public function index(){
			if(isset($_SESSION['user'])){
				$view = new View('admin/index');
				
				$reserves_list = $this->reservaService->getTotesReservesRestants();
				$view->add('reserves_list', $reserves_list);
				
				$preus = $this->reservaService->getPreus();
				$view->add('preus', $preus);
				
				$detalls = $this->reservaService->getDetalls();
				$view->add('detalls', $detalls);
				
				$oferta = $this->reservaService->getOferta();
				$view->add('ofertes', $oferta);
				
				$reserves = $this->reservaService->getReservesRestants();
				$view->add('reserves', json_encode($reserves['reserves']));
				$view->add('entrades', json_encode($reserves['entrades']));
				$view->add('sortides', json_encode($reserves['sortides']));

				return $view;
			} else return new View("redirect:login?ko");
		}
		
		public function preu(){
			if(isset($_SESSION['user'])){
				$id = $_POST['id'];
				for($i = 2; $i <= Locales::__getKey("apt".$id."_pax"); $i = $i+2){ 
					$preu = $this->reservaService->getPreu($id, $i);
					print_r($preu);
					if(!isset($preu->id)){
						$preu->id_apt = $id;
						$preu->pax = $i;
					}
					$preu->preu_3_baixa = $_POST['preu_baixa_3_pax_'.$i];
					$preu->preu_7_baixa = $_POST['preu_baixa_7_pax_'.$i];
					$preu->preu_3_mitja = $_POST['preu_mitja_3_pax_'.$i];
					$preu->preu_7_mitja = $_POST['preu_mitja_7_pax_'.$i];
					$preu->preu_3_alta = $_POST['preu_alta_3_pax_'.$i];
					$preu->preu_7_alta = $_POST['preu_alta_7_pax_'.$i];
					$preu->preu_mes_alta = $_POST['preu_alta_mes_pax_'.$i];
					$preu->preu_mes_mitja = $_POST['preu_mitja_mes_pax_'.$i];
					$preu->preu_mes_baixa = $_POST['preu_baixa_mes_pax_'.$i];
					
					$this->reservaService->save($preu);
				}
				return new View('redirect:admin');
			} else return new View("redirect:login?ko");
		}
		
		public function detall(){
			if(isset($_SESSION['user'])){
				$id = $_POST['id'];
				$detall = $this->reservaService->getDetallsApartament($_POST['id']);
				if($detall === null){
					$detall = new Detall();
					$detall->id_apartament = $_POST['id'];
				}
// 				$detall->ca = nl2br($_POST['ca']);
				$detall->es = nl2br($_POST['es']);
				$detall->en = nl2br($_POST['en']);
				$detall->fr = nl2br($_POST['fr']);
				$detall->it = nl2br($_POST['it']);
				$detall = $this->reservaService->save($detall);
				
				return new View('redirect:admin');
			} else return new View("redirect:login?ko");
		}
		
		public function ofertes(){
			if(isset($_SESSION['user'])){
				$id = $_POST['id'];
				$oferta = $this->reservaService->getOfertaApartament($_POST['id']);
				if($oferta === null){
					$oferta = new Oferta();
					$oferta->id_apartament = $_POST['id'];
				}
// 				$oferta->ca = nl2br($_POST['ca']);
				$oferta->es = nl2br($_POST['es']);
				$oferta->en = nl2br($_POST['en']);
				$oferta->fr = nl2br($_POST['fr']);
				$oferta->it = nl2br($_POST['it']);
				$oferta->active = true;
				if(strlen($oferta->ca) < 2 && strlen($oferta->es) < 2 && strlen($oferta->en) < 2 && 
						strlen($oferta->fr) < 2 && strlen($oferta->it) < 2){
					$oferta->active = false;
				}
				$oferta = $this->reservaService->save($oferta);
		
				return new View('redirect:admin');
			} else return new View("redirect:login?ko");
		}
		
		
		public function reservar(){
			if(isset($_SESSION['user'])){
				$reserva = $this->reservaService->saveReserva($_POST['apt'], $_POST['from'], $_POST['to'], $_POST['persona']);
				return new View('redirect:admin');
			} else return new View("redirect:login?ko");
		}
		
		public function esborrar(){
			if(isset($_SESSION['user'])){
				$reserva = $this->reservaService->esborrarReserva($_POST['id']);
				return new View('redirect:admin');
			} else return new View("redirect:login?ko");
		}
		
		
		/*
		 * CONTROLADORS DE LOGIN/LOGOUT
		 */
		
		public function login(){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if($_POST['user'] === USR_ADMIN && $_POST['psw'] === PSW_ADMIN){
				$_SESSION['user'] = TRUE;
				return new View('redirect:admin/index', 'admin');
			}
			return new View('redirect:login?ko');
		}

		public function logout(){
			session_destroy();
			return new View('redirect:index');
		}

	}