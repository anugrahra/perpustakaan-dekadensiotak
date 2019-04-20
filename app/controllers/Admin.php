<?php

class Admin extends Controller {
	//method default
	public function index()
	{	
		Sesi::sudahLogin();
		$data['title'] = 'SIGN IN | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();

		$this->view('templates/landingheader', $data);
		$this->view('admin/index', $data);
	}

	public function login()
	{
		//cek username
		if($this->model('Admin_model')->sistemLogin($_POST) > 0) {
			$_SESSION["login"] = true;
			header('Location: ' . BASEURL . '/koleksi');

			//cek ingat saya
			if( isset($_POST['remember']) ) {
				//bikin cookie
				setcookie('signin', 'true', time() + 604800);
			}
			exit;
		} else {
			echo "USERNAME / PASSWORD SALAH!";
			exit;
		}
	}

	public function logout()
	{
		return $this->model('Admin_model')->sistemLogout();
	}

}