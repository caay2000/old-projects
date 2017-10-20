<?php

	class Index_Controller extends Controller{
				
		function index(){
			$view = new View('index');
			$view->addTemplate('page', 'index');
			return $view;
		}
		
		function servicios(){
			$view = new View('servicios');
			$view->addTemplate("page", "servicios");
			return $view;
		}
		
		function proyectos(){
			$view = new View('proyectos');
			$view->addTemplate("page", "proyectos");
			return $view;
		}
		
		function contacto(){
			$view = new View('contacto');
			$view->addTemplate("page", "contacto");
			return $view;
		}
		
		function sitemap(){
			$view = new View('sitemap');
			$view->addTemplate("page", "sitemap");
			return $view;
		}
		
		function legal(){
			$view = new View('legal');
			$view->addTemplate("page", "legal");
			return $view;
		}
		
		function cookies(){
			$view = new View('cookies');
			$view->addTemplate("page", "legal");
			return $view;
		}
		
		function contactomail(){
			if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mesage'])){
				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				MailService::sendMail(Locales::__getKey('mail_contact'), Locales::__getKey('mail_subject_contacte').$_POST['nom'].' - '.$_POST['email'].' - '.Locales::__getKey('lang'), $_POST['mesage']);
				if(isset($_POST['copia'])) MailService::sendMail($_POST['email'], Locales::__getKey('mail_subject_contacte').$_POST['nom'], $_POST['mesage']);
				return new View('redirect:contacto?okm');
			}
			return new View('redirect:contacto?kom');
		}
		
		function serviciosmail(){
			if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['info'])){
				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$servei = $_POST['servei'];
				if($servei === "web") $servei = Locales::__getKey('index_box1_h1');
				elseif($servei === "web_plus") $servei = Locales::__getKey('index_box2_h1');
				elseif($servei === "altres_serveis") $servei = Locales::__getKey('index_box3_h1');
				else $servei = "Cap servei seleccionat";
				$servei = html_entity_decode($servei);
				MailService::sendMail(Locales::__getKey('mail_contact'), Locales::__getKey('mail_subject_info').$servei." - ".$_POST['nom']." - ".$_POST['email'].' - '.Locales::__getKey('lang'), $_POST['mesage']);
				return new View('redirect:servicios?okm');
			}
			return new View('redirect:servicios?kom');
		}
		
		function contactotelf(){
			if(isset($_POST['nom']) && isset($_POST['telf'])){
				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				MailService::sendTelf($_POST['nom'].' - '.Locales::__getKey('lang'), $_POST['telf'], isset($_POST['mati']), isset($_POST['tarde']));
				return new View('redirect:contacto?okt');
			}
			return new View('redirect:contacto?kot');
		}
		
		function indextelf(){
			if(isset($_POST['nom']) && isset($_POST['telf'])){
				$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				MailService::sendTelf($_POST['nom'].' - '.Locales::__getKey('lang'), $_POST['telf'], isset($_POST['mati']), isset($_POST['tarde']));
				return new View('redirect:index?okt');
			}
			return new View('redirect:index?kot');
		}
		
	}