<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
</head>
<body>
  
</body>
</html>
<?php


require_once 'PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer(true);
$alert='';

if(isset($_POST['submit'])){
$nome = utf8_decode($_POST['nome']);
$email = utf8_decode($_POST['email']);
$phone = utf8_decode($_POST['phone']);
$assunto = utf8_decode($_POST['assunto']);
$mensagem = utf8_decode($_POST['mensagem']);
 
try{
    $mail->isSMTP();
    //Configuração do Servidor de e-mail

    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";
    $mail->SMTPSecure = "tsl";
    $mail->SMTPAuth=true;
    $mail->Username = "hericles.chauca25@gmail.com";//Email para receber mensagens
    $mail->Password = "ampiowechvewkzbo";//Gmail password

    //Configuração do Email
$mail->setFrom($mail->Username,"SJCWork's Contactos");// Remetente
$mail->addAddress('hericles.chauca25@gmail.com');//Email onde queres receber as mensagens-usa-se qualquer email
$mail->Subject = "Fale Conosco";//Assunto do Email

$conteudo_email = "

<p><strong>Nome Completo:</strong>$nome</p> 
<p><strong>E-mail:</strong>$email</p>
<p><strong>Telefone:</strong>$phone</p>
<h4><strong>Assunto:</strong>$assunto</h4>
<br>

<h3><strong>Mensagem:</strong></h3><br>

$mensagem
";

$mail->isHTML(true);
$mail->Body = $conteudo_email;

$mail->send();
$alert='<div class="alert-success">
<span>Mensagem Enviada! Obrigado por contactar.</span>
</div>';

}catch(Exception $e){
    $alert='<div class="alert-error">
    <span>'.$e->getMessage().'</span>
 </div>';
}
}

?>


