<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

/* Verifica se algum campo está vazio */
if (isEmpty()) { // Funcao em validate.php
  flash('message', 'Preencha todos os campos', 'danger');
  return redirect("edit_user&id=" . $id); // Direciona para a página
}

/* Valida os campos e retorna objeto $validate com os devidos atributos */
$validate = validate([  // Funcao em validate.php
  'name' => 's',
  'surname' => 's',
  'email' => 'e',
  //'password' => 's'
]);

$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
  flash('message', 'Atualizado com sucesso', 'success');
  return redirect("edit_user&id=" . $id); // Direciona para a página
}

flash('message', 'Erro ao atualizar');
redirect("edit_user&id=" . $id); // Direciona para a página