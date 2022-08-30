<?php

class MailService{
	
	public static function sendMail($to, $subject, $message, $from = NULL){
		if(self::spamcheck($to)){
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= 'To: '.$to."\r\n";
			if($from === NULL) $headers .= 'From: '.Locales::__getKey('mail_contact')."\r\n";
			else $headers .= 'From: '.$from."\r\n";

			// commented in order to avoid sending emails from webpage
			//mail($to, $subject, $message, $headers);
			return TRUE;
		}
		return FALSE;
	}
	
	public static function sendTelf($nombre, $telefono, $h1, $h2){
		$text = '';
		if($h1 === TRUE) $text = $text.'Mati ';
		if($h2 === TRUE) $text = $text.'Tarda';
		$text = 'TELF - '.$nombre. '; '.$telefono. '; '.$text;
		
		self::sendMail(Locales::__getKey('mail_contact'), $text, $text);
	}
	
	private static function spamcheck($field) {
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
		if(filter_var($field, FILTER_VALIDATE_EMAIL)) return TRUE;
		else return FALSE;
	}
	
}
	