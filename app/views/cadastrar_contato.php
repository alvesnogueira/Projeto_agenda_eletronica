
<h3>Cadastrar Contato</h3>

<form action="insere.php" method="post" class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-5">
      <input type="nome" class="form-control" id="inputname" placeholder="Nome" name="nome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputemail" placeholder="email" name="email">
    </div>
  </div>
   <div class="form-group">
    <label for="inputtel" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-5">
      <input type="tel" class="form-control" id="inputtel" placeholder="Telefone" name="telefone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputend" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-5">
      <input type="end" class="form-control" id="inputend" placeholder="Endereço" name="endereco">
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