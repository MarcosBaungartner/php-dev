<?php

/* Se a chave 'message' do índice 'flash' de '$_SESSION' NÃO TIVER sido setada, será atribuído a ela a mensagem passada pela funçao em 'forms/contato.php' */
function flash($key, $message, $type='danger') {
  if (!isset($_SESSION['flash'][$key])) {
    $_SESSION['flash'][$key] = '<span class="alert alert-'.$type.'">' . $message . '</span>';
  }
}

/* Se a chave 'message' do índice 'flash' de '$_SESSION' TIVER sido setada, retorna o conteúdo da chave 'message'  */
function get($key) {
  if(isset($_SESSION['flash'][$key])) {
    $message = $_SESSION['flash'][$key];
    unset($_SESSION['flash'][$key]); // Limpa a variável '$key" para que a mensagem não reapareça ao atualizar a página
    return $message ?? '';
  }
}