<?php
	require_once("config/db.php");
    require_once("controllers/user.controller.php");
	define( 'RUTA_HTTP', 'http://' . $_SERVER['HTTP_HOST'] );	
	if(!isset($_REQUEST['c'])){
		$controller = new UserController();
		$controller->Index();    
	} 
	else {		
		$controller = $_REQUEST['c'] . 'Controller';
		$accion     = isset($_REQUEST['a']) ? $_REQUEST['a']  : 'Index';
		$controller = new $controller();
		call_user_func( array( $controller, $accion ) );
	}
?>