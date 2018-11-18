<h2>Contato</h2>

<?=get('message') // Funcao em flash.php?>

<form action="/pages/forms/contato.php" method="POST" role="form">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Digite seu email">
  </div>

  <div class="form-group">
    <label for="">Assunto</label>
    <input type="text" class="form-control" name="subject" placeholder="Digite o assunto">
  </div>

  <div class="form-group">
    <label for="">Mensagem</label>
    <textarea class="form-control" name="message" cols="50" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>



</form>