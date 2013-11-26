<?php  include (PATH_VIEWS . DS ."header.php");  ?>
<script type="text/javascript">
  // Inicia o validador ao carregar a página
$(function() {
    // valida o formulário
    $('#form-validado').validate({
        // define regras para os campos
        rules: {
            nome: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true
                minlength: 8
            }
        },
        // define messages para cada campo
        messages: {
            nome: "Preencha o seu nome completo",
            email: "Preencha seu e-mail de contato",
            telefone: "Informe seu telefone"
        }
    });
});
</script>

<h3>Cadastrar Contato</h3>

<form id="form-validado" action="inserir" method="post" class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-5">
      <input value="besteira" type="text" class="form-control" id="inputname" placeholder="Nome" name="nome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">email</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputemail" placeholder="email" name="email">
    </div>
  </div>
   <div class="form-group">
    <label for="inputtel" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-5">
      <input type="" class="form-control" id="inputtel" placeholder="Telefone" name="telefone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputend" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputend" placeholder="Endereço" name="endereco">
    </div>
  </div>
  <div class="form-group">
    <label for="inputniver" class="col-sm-2 control-label">Aniverário</label>
    <div class="col-sm-5">
      <input id="inputniver" type="date" min="1900-08-14" max="2100-08-14" value="2013-11-14"/ name="data">
    </div>
  </div>
 
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>


<?php include (PATH_VIEWS . DS ."footer.php"); ?>