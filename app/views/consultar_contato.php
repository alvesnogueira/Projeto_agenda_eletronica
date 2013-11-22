<?php  include (PATH_VIEWS . DS ."header.php");  ?>
<h3>Consultar contato</h3>

<form action="consultar" method="post" class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-5">
      <input type="nome" class="form-control" id="inputname" placeholder="Nome" name="nome">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default">Pesquisar</button>
    </div>
  </div>

</form>

<?php if(!empty($contatos)): ?>

<table width="700" align="center">
  <tr>
    <td bgcolor="#ebf3ff"><b>Nome</b></td>
    <td bgcolor="#ebf3ff"><b>Email</b></td>
    <td bgcolor="#ebf3ff"><b>Telefone</b></td>
    <td bgcolor="#ebf3ff"><b>endereco</b></td>
    <td bgcolor="#ebf3ff"><b>Data Nascimento</b></td>
  </tr>

  <?php foreach($contatos as $contato) ?>
  <tr>
    <td><?php  echo $contato['nome'] ?></br></td>
    <td><?php  echo $contato['email'] ?></br></td>
    <td><?php  echo $contato['telefone'] ?></br></td>
    <td><?php  echo $contato['endereco'] ?></br></td>
    <td><?php  echo $contato['datanasc'] ?></br></td>
  </tr>

</table>
<?php   endif; ?>
<?php include (PATH_VIEWS . DS ."footer.php"); ?>