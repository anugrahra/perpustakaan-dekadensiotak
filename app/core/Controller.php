<?php

class Controller {

	//VIEW
	public function view($view, $data = [])
	{
		//anggap ini sedang berada di index utama
		require_once '../app/views/' . $view . '.php';
	}

	//MODEL
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		//karena bentuknya class, jadi harus diinstansiasi dulu
		return new $model;	
	}
}