<?php

class App {
	//property dengan nilai default
	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		//memanggil method parseURL
		$url = $this->parseURL();
		
		//CONTROLLER
		//mengecek ketersediaan controller
		if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
			$this->controller = $url[0];
			//menghilangkan controller dari elemen 0 untuk nanti ngambil parameternya
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';
		//instansiasi untuk mengambil methodnya
		$this->controller = new $this->controller;

		//METHOD
		if( isset($url[1]) ){
			if( method_exists($this->controller, $url[1]) ) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//PARAMS
		if ( !empty($url) ) {
			//ngambil sisanya yang ga diunset tea
			$this->params = array_values($url);
		}

		//jalankan controller dan method serta params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	//ROUTING
	//parsing URL (mengambil url dan memecahnya menjadi elemen-elemen array)
	public function parseURL()
	{
		if ( isset($_GET['url']) ) {

			//menghapus '/' di akhir url
			$url = rtrim($_GET['url'], '/');
			
			//memebersihkan url dari karakter aneh
			$url = filter_var($url, FILTER_SANITIZE_URL);

			//memecah url berdasarkan tanda '/' untuk menjadikannya elemen array
			$url = explode('/', $url);

			return $url;
		}
	}

}