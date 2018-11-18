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