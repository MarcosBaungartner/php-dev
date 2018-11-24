<?php

require "../../../bootstrap.php";

/* Verifica se algum campo está vazio */
if (isEmpty()) { // Funcao em validate.php
  flash('message', 'Preencha todos os campos', 'danger');
  return redirect("create_user"); // Direciona para a página
}

/* Valida os campos e retorna objeto $validate com os devidos atributos */
$validate = validate([  // Funcao em validate.php
  'name' => 's',
  'surname' => 's',
  'email' => 'e',
  'password' => 's'
]);

$cadastrado = create('users', $validate);

if ($cadastrado) {
  flash('message', 'Cadastrado com sucesso', 'success');
  redirect('create_user');
}

flash('message', 'Erro ao cadastrar');
redirect('create_user');