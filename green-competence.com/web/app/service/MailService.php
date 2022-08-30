<?php

	class MailService extends Service{
	
		public function sendMail($to, $subject, $message, $from = NULL){
			if(self::spamcheck($to)){
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'To: '.$to."\r\n";
				if($from === NULL) $headers .= 'From: '.MAIL_INFO."\r\n";
				else $headers .= 'From: '.$from."\r\n";
					
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