<?php

class Home extends Controller {
	//method default
	public function index()
	{	
		$data['title'] = 'PERPUSTAKAAN dekadensiotak';
		$data['koleksi'] = count($this->model('Koleksi_model')->getAllKoleksiBuku());
		$data['untukmu'] = count($this->model('Koleksi_model')->getAllUntukKamu());
		$data['member'] = count($this->model('Member_model')->getAllMember());
		$total = $data['koleksi'] + $data['untukmu'];
		$data['jmltotal'] = 'Kini tersedia<b> ' . $total . '</b>  koleksi';

		$this->view('templates/landingheader', $data);
		//menuju ke file di alamat views/home/index
		$this->view('home/index', $data);
	}
}