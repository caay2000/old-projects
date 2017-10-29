<?php

	class IndexController extends Controller{
		
		private $usuario = 'XXXXXXX';
		private $contrasena = 'XXXXXXXXX';

		private $correo = 'despacho@mirmolinaadvocats.com';
		private $noticias_x_page = 5;

		function index(){
			$view = new View('index');	
			$view->addTemplate('page', 'index');
			return $view;
		}
		
		function materias(){
			$view = new View('materias');
			$view->addTemplate('page', 'materias');
			return $view;
		}
		
		function abogados(){
			$view = new View('abogados');
			$view->addTemplate('page', 'abogados');
			return $view;
		}
		
		function actualidades(){
			//para saber en que pagina estamos
			$page = 0;
			if(isset($_GET['page'])) $page = $_GET['page'];
			
			//creamos el dao
			//$dao = new DAO();
			//cogemos las actualidades, dependiendo de la pagina
			//$actualidades = $dao->getActualidadesByPage($page, $this->noticias_x_page);
			
			//$total = $dao->getTotalActualidades();
			//$num_pages = ceil($total / $this->noticias_x_page);
			
			//añadimos actualidades a la vista
			$view = new View('actualidades');
			$view->addTemplate('page', 'actualidades');
			$view->add("actualidades", array());
			$view->add("num_paginas", 1);
			//mostramos vista
			return $view;
		}
		
		function enlaces(){
			//busco en la BD todos los enlaces
//			$dao = new DAO();
//			$enlaces = $dao->getEnlaces();
			
			//creo la vista
			$view = new View('enlaces');
			$view->addTemplate('page', 'enlaces');
			
			//añado los enlaces para utilizar en la vista
			$view->add("links", array());
			
			//devuelvo la vista
			return $view;
		}

		function contacto(){
			$view = new View('contacto');
			if(isset($_GET['OK'])){
				$view->add('envioemail', true);
			}elseif(isset($_GET['KO'])){
				$view->add('envioemail', false);
			}
			$view->addTemplate('page', 'contacto');
			return $view;
		}
		
//		function login(){
//			$view = new View('login');
//			$view->addTemplate('page', '');
//			return $view;
//		}
//
//		function admin(){
//			if(isset($_POST['nom']) && isset($_POST['psw'])){
//				if($_POST['nom'] == $this->usuario && $_POST['psw'] == $this->contrasena){
//					$_SESSION['admin'] = true;
//					return new View('redirect:index?OK');
//				}
//			}
//			return new View('redirect:index?KO');
//		}
//
//		function logout(){
//			session_destroy();
//			return new View('redirect:index');
//		}
//
//
//
//
//
//
//
//		function nuevaActualidad(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				$view = new View('nuevaActualidad');
//				$view->addTemplate('page', '');
//				return $view;
//			}
//			return new View("redirect:index");
//		}
//
//		function insertActualidad(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//validar parametros
//// 				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//				if(isset($_POST['titulo']) && strlen($_POST['titulo'])>0 && isset($_POST['texto']) && strlen($_POST['texto'])>0){
//					//guardar en BD
//					$dao = new DAO();
//					$dao->insertActualidad($_POST['titulo'], $_POST['texto'], $_FILES['pdf']);
//					$dao->close();
//
//					//redirigir a la vista
//					return new View('redirect:actualidades');
//				}
//
//				//si la validacion ha fallado, no guardamos i mensaje de error
//				return new View('redirect:nuevaActualidad?ko');
//			}
//			return new View("redirect:index");
//		}
//
//		function saveActualidad(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//validar parametros
//// 				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//				if(isset($_POST['titulo']) && strlen($_POST['titulo'])>0 && isset($_POST['texto']) && strlen($_POST['texto'])>0
//						&& isset($_POST['id']) && $_POST['id']>0){
//					//guardar en BD
//					$dao = new DAO();
//					$dao->updateActualidad($_POST['id'], $_POST['titulo'], $_POST['texto']);
//					//cerramos el dao
//					$dao->close();
//					//redirigir a la vista
//					return new View('redirect:actualidades');
//				}
//				//si la validacion ha fallado, no guardamos i mensaje de error
//				return new View('redirect:editActualidad?id='.$_POST["id"].'&ko');
//			}
//			return new View("redirect:index");
//		}
//
//		function editActualidad(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//
//				$dao = new DAO();
//				$actualidad = $dao->getActualidadById($_GET['id']);
//
//				$view = new View('nuevaActualidad');
//				$view->addTemplate('page', '');
//				$view->add('link', $actualidad[0]);
//				return $view;
//			}
//			return new View("redirect:index");
//		}
//
//		function deleteActualidad(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//borramos el Enlace con la ID indicada
//				$dao = new DAO();
//				$result = $dao->deleteActualidad($_GET['id']);
//				//cerramos el dao
//				$dao->close();
//				//si ha ido bien, vamos a los enlaces
//				return new View("redirect:actualidades");
//			}
//			return new View("redirect:index");
//		}
//
//		function nuevoEnlace(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				$view = new View('nuevoEnlace');
//				$view->addTemplate('page', '');
//				return $view;
//			}
//			return new View("redirect:index");
//		}
//
//		function insertEnlace(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//validar parametros
//				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//				if(isset($_POST['texto']) && strlen($_POST['texto'])>0 && isset($_POST['nom']) && strlen($_POST['nom'])>0
//						&& isset($_POST['mail']) && strlen($_POST['mail'])>0){
//					//guardar en BD
//					$dao = new DAO();
//					$dao->insertEnlace($_POST['texto'], $_POST['nom'], $_POST['mail']);
//					//cerramos el dao
//					$dao->close();
//					//redirigir a la vista
//					return new View('redirect:enlaces');
//				}
//
//				//si la validacion ha fallado, no guardamos i mensaje de error
//				return new View('redirect:nuevoEnlace?ko');
//			}
//			return new View("redirect:index");
//		}
//
//		function saveEnlace(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//validar parametros
//				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//				if(isset($_POST['texto']) && strlen($_POST['texto'])>0 && isset($_POST['nom']) && strlen($_POST['nom'])>0
//						&& isset($_POST['mail']) && strlen($_POST['mail'])>0 && isset($_POST['id']) && $_POST['id']>0){
//					//guardar en BD
//					$dao = new DAO();
//					$dao->updateEnlace($_POST['id'], $_POST['texto'], $_POST['nom'], $_POST['mail']);
//					//cerramos el dao
//					$dao->close();
//					//redirigir a la vista
//					return new View('redirect:enlaces');
//				}
//				//si la validacion ha fallado, no guardamos i mensaje de error
//				return new View('redirect:editEnlace?id='.$_POST["id"].'&ko');
//			}
//			return new View("redirect:index");
//		}
//
//		function editEnlace(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//
//				$dao = new DAO();
//				$enlace = $dao->getEnlaceById($_GET['id']);
//
//				$view = new View('nuevoEnlace');
//				$view->addTemplate('page', '');
//				$view->add('link', $enlace[0]);
//				return $view;
//			}
//			return new View("redirect:index");
//		}
//
//		function deleteEnlace(){
//			if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
//				//borramos el Enlace con la ID indicada
//				$dao = new DAO();
//				$result = $dao->deleteEnlace($_GET['id']);
//				//cerramos el dao
//				$dao->close();
//				//redirigimos a enlaces
//				return new View("redirect:enlaces");
//			}
//			return new View("redirect:index");
//		}

		function enviar(){
			if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mesage']) && isset($_POST['telf'])){
				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$message = $this->generarMensage($_POST['nom'], $_POST['email'], $_POST['telf'], $_POST['mesage']);
				$this->sendMail($this->correo, 'Consulta desde web', $message, $_POST['email']);
				return new View('redirect:contacto?OK');
			}
			return new View('redirect:contacto?KO');
		}
		
		private function generarMensage($nom, $email, $telf, $mesage){
			$message = 'Nombre : '.$nom.'<br/>';
			$message = $message.'Email : '.$email.'<br/>';
			$message = $message.'Teléfono : '.$telf.'<br/>';
			$message = $message.$mesage;
			return $message;
		}
		
		private function sendMail($to, $subject, $message, $from ){
			if(self::spamcheck($to)){
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'To: '.$to."\r\n";
				$headers .= 'From: '.$from."\r\n";
					
				mail($to, $subject, $message, $headers);
				return TRUE;
			}
			return FALSE;
		}
		
		private function spamcheck($field) {
			$field = filter_var($field, FILTER_SANITIZE_EMAIL);
			if(filter_var($field, FILTER_VALIDATE_EMAIL)) return TRUE;
			else return FALSE;
		}
		
	}