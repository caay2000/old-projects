<?php

/*Controller*/
class AuthUtil{
	
	public static function logged(){
		if(isset($_SESSION['user']) && $_SESSION['user'] == TRUE) return TRUE;
		return FALSE;
	}
	
}