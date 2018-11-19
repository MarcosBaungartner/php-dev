<?php
/* Funçao Dump and Die para mostrar variáveis na tela */
function dd($dump) {
  var_dump($dump);
  die();
}

/* Se o método do request for 'Post', retorna '$_POST', senão retorna '$_GET' */
function request() {
  $request = $_SERVER['REQUEST_METHOD'];

  if($request == 'POST') {
    return $_POST;
  }

  return $_GET;
}

/* Função para redirecionar a página especificada no argumento */
function redirect($target) {
  return header("location:/?page={$target}");
}

/* Função para redirecionar para a página Home */
function redirectToHome() {
  return header("location:/");
}