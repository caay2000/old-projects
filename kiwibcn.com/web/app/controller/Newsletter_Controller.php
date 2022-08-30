<?php

class Newsletter_Controller extends Controller{
	
	function index(){
		$view = new View('mail/mail_publi_basic', 'newsletter');
		$view->addTemplate("href_version_web", PAGE_ROOT."/newsletter");
		return $view;
	}
	
	function newsletter1305(){
		$view = new View('mail/mail_publi_1305', 'newsletter_publi');
		$view->addTemplate("href_version_web", PAGE_ROOT."/newsletter/newsletter1305");
		
// 		if(isset($_GET['send'])){
// 			$mail = $view->renderize();
// 			MailService::sendMail('caay2000@gmail.com', 'Mail Publi 1305', $mail);
// 		}
		return $view;
	}

}
		