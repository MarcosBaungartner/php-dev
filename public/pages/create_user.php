<?=get('message')?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" class="form-control" name="surname" placeholder="Sobrenome">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Senha">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>