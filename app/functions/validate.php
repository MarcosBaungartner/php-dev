<?php

/* Filtra possiveis códigos <script> do array do request e retorna um object $validate com os dados validados */
function validate(array $fields) {
  $request = request();
  $validate = [];
  foreach($fields as $field => $type) {
    switch($type) {
    case 's':
      $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
      break;
    case 'i':
      $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
      break;
    case 'e':
      $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
      break;
    }
  }
  return (object) $validate;
}

/* Verifica se o array do request possui algum índice vazio, se sim retorna true do contrário retorna false */
function isEmpty() {
  $request = request();
  $empty = false;

  foreach ($request as $key => $value) {
    if (empty($request[$key])) {
      $empty = true;
    }
  }

  return $empty;
}