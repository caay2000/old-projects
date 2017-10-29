<?php

/*Controller*/
class AuthUtil{
	
	public static function logged(){
		if(isset($_SESSION['user'])) return TRUE;
		return FALSE;
	}
	
	public static function hasRole($role){
		if(self::logged()){
			$user = $_SESSION['user'];
			foreach ($user->getRoles() as $urole){
				if($urole->getName() === $role) return TRUE;
			}
		}
		return FALSE;
	}
	
}