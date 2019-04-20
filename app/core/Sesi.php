<?php

class Sesi {

	public static function cekSession()
	{
		if(!isset($_SESSION["login"])){
			header("Location: " . BASEURL . "/admin");
			exit;
		}
	}

	public static function sudahLogin()
	{

		if( isset($_COOKIE['signin']) ) {
			if( $_COOKIE['signin'] == 'true' ) {
				$_SESSION['login'] = true;
			}
		}

		if(isset($_SESSION["login"])) {
			header("Location: " . BASEURL . "/koleksi");
			exit;
		}
	}

	public static function displayLogout()
	{	
		$disabling = "";
		if(!isset($_SESSION["login"])){
			$disabling = "display: none;";
		}

		return $disabling;
	}

}