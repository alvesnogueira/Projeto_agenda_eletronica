<?php


/*
 * Arquivo de configuração
 */

/* Banco de dados */
$_config["bd"]["host"] = "localhost";
$_config["bd"]["usuario"] = "root";
$_config["bd"]["senha"] = "";
$_config["bd"]["database"] = "agenda";

/* Agenda */
define("SITE_URL"			, "http://localhost:81/aula_php_faculdade/pratica_4/public");
define("PATH_IMG"			, "img/");
define('PATH_INCLUDES'		, PATH_APP. 'includes' . DS);
define('PATH_VIEWS'			, PATH_APP. 'views' . DS);
define('PATH_MODELS'		, PATH_APP. 'models' . DS);
define('PATH_CONTROLLERS'	, PATH_APP. 'controllers' . DS);
define('DEBUG'	, 1);
