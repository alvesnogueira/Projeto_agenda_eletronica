<?php


if(empty($_POST)){
	include(PATH_VIEWS . 'cadastrar_contato.php');
}
else{
	include(PATH_MODELS . 'contato'.DS.'cadastra.php');
}