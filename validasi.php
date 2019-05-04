<?php 
	function validasi()
	{
		$patternUsername = "/[a-z]/";
		$username = $_POST['username'];

		$patternPassword = "/[a-zA-Z0-9]\W/";
		$password = $_POST['password'];
		if (preg_match($patternUsername, $username) && strlen($username)==8) {
			return true;
		}else{
			return false;
		}
		if (preg_match($patternPassword, $password) && strlen($password)>=8) {
			return true;
		}else{
			return false;
		}
	}
?>