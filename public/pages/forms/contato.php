<?php

require "../../../bootstrap.php";

/* Verifica se algum campo está vazio */
if (isEmpty()) { // Funcao em validate.php
  flash('message', 'Preencha todos os campos', 'danger');
  return redirect("contato"); // Direciona para a página
}

/* Valida os campos e retorna objeto $validate com os devidos atributos */
$validate = validate([  // Funcao em validate.php
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'
]);

/* Array para guardar os atributos de $validate */
$data = [
  'quem' => $validate->name,
  'email' => $validate->email,
  'para' => 'contato@devclass.com.br',
  'assunto' => $validate->subject,
  'mensagem' => $validate->message
];

/* Se email foi enviado, mostra mensagem de sucesso */
if (send($data)) { // Passa o Array com os dados do formulario para a função send
  flash('message', 'Email enviado com sucesso', 'success');
  return redirect("contato"); // Direciona para a página
}