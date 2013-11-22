<?php 

if(isset($_POST)){

	$contatos = array();

	$nome = isset($_POST['nome']) ? $_POST['nome'] : NULL;

	$query = "SELECT *
	FROM  contato
	WHERE nome = '$nome'";

	$result = mysqli_query($_conexao,$query) or die(mysqli_error($_conexao));
	$qtd = mysqli_num_rows($result);


	if($qtd){
		while ($contato = mysqli_fetch_array($result)) {

			$contatos[] = $contato;
		}
	}

}
