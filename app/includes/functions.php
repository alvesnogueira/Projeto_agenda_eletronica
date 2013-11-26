<?php


/**
 * Faz a conexão com o banco de dados
 */
function connect_db($_config){

	// Realiza a conexão
	$_conexao = mysqli_connect($_config["bd"]["host"], $_config["bd"]["usuario"], $_config["bd"]["senha"], $_config["bd"]["database"]);

	// Erro na conexão? Termina a execução do script.
	if (mysqli_connect_errno()) {
		exit("Erro ao realizar a conexão com o banco de dados.");
	}

	// Configura o charset a ser utilizado
	mysqli_set_charset($_conexao, "utf8");

	return $_conexao;
}

/**
* Preapara os parametros passados pela url
*/
function prepare_parameters($params){
	return explode('/', $params);
}

/*Exibe o debug no site*/
function debug($params = NULL)
{	

	if(DEBUG){
		echo '<div class="debug">';
			echo'<h2>PARAMS:</h2>';
			var_dump($params);	

			echo'<h2>GET:</h2>';
			var_dump($_GET);

			echo'<h2>POST:</h2>';
			var_dump($_POST);

			echo'<h2>SESSION</h2>';
			var_dump($_SESSION);
			
		echo '</div>';
	}
}