<?php
define('DS', DIRECTORY_SEPARATOR);
define('PATH_APP', dirname(__DIR__). DS . 'app');
require_once(PATH_APP. DS . "includes". DS ."preload.php");

include (PATH_VIEWS . DS ."header.php");
$params = prepare_parameters($_GET['q']);


//verifica se existe o parametro passado no array keys de $modules
if(in_array($params[0], array_keys($routes))){

	require_once(PATH_CONTROLLERS.DS.$routes[$params[0]]);

}else{
	header("HTTP/1.0 404 Not Found");
	include("404.php");
}

include (PATH_VIEWS . DS ."footer.php");
