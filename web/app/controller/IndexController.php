<?php

	class IndexController extends Controller{
		
		private $mailService;
		
		function __construct(){
			$this->mailService = MailService::getInstance();
		}

		function index(){
			$view = new View('index');
			$view->addTemplate("page", "index");
			return $view;
		}
		
		function cookies(){
			$view = new View('cookies');
			$view->addTemplate("page", "cookies");
			return $view;
		}
		
		function contacto(){
			$view = new View('contacto');
			$view->addTemplate("page", "contacto");
			return $view;
		}
		
		function prensa(){
			$view = new View('prensa');
			$view->addTemplate("page", "prensa");
			return $view;
		}
		
		function actualidad(){
			$view = new View('actualidad');
			$view->addTemplate("page", "actualidad");
			return $view;
		}

		function identidad(){
			$view = new View('identidad');
			$view->addTemplate("page", "identidad");
			return $view;
		}
		
		function servicio($sector){
			$view = new View('servicio');
			$view->addTemplate("page", "servicios");
			$view->add("sector", $sector[0]);
			return $view;
		}
		
		function costesdirectos($sector){
			$view = new View('serviciocostes');
			$view->addTemplate("page", "servicios");
			$view->add("sector", $sector[0]);
			return $view;
		}
		
		function actualizar($sector){
			$view = new View('servicioactualiza');
			$view->addTemplate("page", "servicios");
			$view->add("sector", $sector[0]);
			return $view;
		}
		
		function implementar($sector){
			$view = new View('servicioimplementa');
			$view->addTemplate("page", "servicios");
			$view->add("sector", $sector[0]);
			return $view;
		}
		
		function sendcontacto(){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if($this->validaParam('nom') && $this->validaParam('email') && $this->validaParam('texto')){
				$body = $this->getEmailBody($_POST);
				$mail = $this->mailService->sendMail(MAIL_TO, "consulta green-competence.com", $body, 'green-competence.com');
				return new View('redirect:contacto?ok');
			}
			return new View('redirect:contacto?ko');
		}
		
		private function validaParam($param){
			if(isset($_POST[$param]) && strlen($_POST[$param])>0) return TRUE;
			return FALSE;
		}
		
		private function getEmailBody($dades){
			$body= "<p>CONSULTA GREEN-COMPETENCE.COM</p>";
			$body.= "<p>Email de ".$dades['nom'].", con email : ".$dades['email']."</p>";
			$body.= "<p>".$dades['texto']."</p>";
			return $body;
		}
		
	}