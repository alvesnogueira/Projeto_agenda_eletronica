<?php
session_start();
session_name('my_project');
define('DS', DIRECTORY_SEPARATOR);
define('PATH_APP', dirname(__DIR__). DS . 'app' . DS);

require_once(PATH_APP. "includes". DS ."preload.php");

$params = prepare_parameters($_GET['q']);
$params[0] = (!empty($params[0]) ? $params[0] : 'cadastrar');

//verifica se existe o parametro passado no array keys de $routes
if(in_array($params[0], array_keys($routes))){

	//Se existir o controller, o inclui
	if( file_exists(PATH_CONTROLLERS . $routes[$params[0]])){
		require_once(PATH_CONTROLLERS . $routes[$params[0]]);
	}
	//Se não existir o controller, verifica se existe a view e a inclui
	else if( file_exists(PATH_VIEWS.$routes[$params[0]]) ){
		require_once(PATH_VIEWS.$routes[$params[0]]);
	}else{
		header("HTTP/1.0 404 Not Found");
		include(PATH_VIEWS."404.php");
	}

}else{
	header("HTTP/1.0 404 Not Found");
	include(PATH_VIEWS."404.php");
}

debug($params);