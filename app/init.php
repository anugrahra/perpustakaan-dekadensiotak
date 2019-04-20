<?php

//memanggil kelas App dan Controller
// require_once 'core/App.php';
// require_once 'core/Controller.php';
// require_once 'core/Database.php';
// require_once 'core/Flasher.php';

spl_autoload_register(function ($class_name) {
	require_once 'core/' . $class_name . '.php';
});

//CONFIG
require_once 'config/config.php';