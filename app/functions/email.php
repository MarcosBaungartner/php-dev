<?php












function send(array $data) {
  $email = new PHPMailer\PHPMailer\PHPMailer;
  $email->CharSet = 'UTF-8';
  $email->SMTPSecure = 'plain';
  $email->isSMTP();
  $email->Host = 'smtp.mailtrap.io';
  $email->Port = 465;
  $email->SMTPAuth = true;
  $email->Username = '1ed1ecd7e222f2';
  $email->Password = 'cab99dba8d8bcf';
  $email->isHTML(true);
  $email->setFrom($data['email']);
  $email->FromName = $data['quem'];
  $email->addAddress($data['para']);
  $email->Subject = $data['assunto'];
  $email->Body = $data['mensagem'];
  $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceitar visualizar HTML';
  $email->MsgHTML($data['mensagem']);
  return $email->send();

  //echo $email->ErrorInfo;

}
