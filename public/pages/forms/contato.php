<?php

require "../../../bootstrap.php";

/* Verifica se algum campo está vazio */
if (isEmpty()) { // Funcao em validate.php
  flash('message', 'Preencha todos os campos', 'danger');
  header("location:/?page=contato"); // Direciona para a mesma página, e ao chamar a função get() a mensagem será exibida
}

/* Valida os campos e retorna object $validate */
$validate = validate([  // Funcao em validate.php
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'
]);

dd($validate->name); // Mostra atributo 'name' do objeto '$validate'