<?php 
require ("includes/config.php");
require ("includes/bd.php");

header('Content-Type: text/html; charset=utf-8');

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$endereco = $_POST['endereco'];


if (empty($nome)) {
	echo "Escreva um nome <br/>";
	echo '<a href="cadastrarcontato.PHP">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
}
// Verifica se o email é válido
else{


$string_sql = "INSERT INTO contato (id,nome,email, telefone, endereco) values (null,'$nome', '$email', '$tel', '$endereco')";
mysqli_query($_conexao,$string_sql) or die("Erro, não possível inserir no banco de dados");
  
 if(mysqli_affected_rows($_conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="cadastrarcontato.PHP">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } 
     }
    mysqli_close($_conexao); //fecha conexão com banco de dados 
?>