<?php 
    //Arquivos necessários para o envio do email
require_once('src/PHPMailer.php'); 
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
    //Usando os arquivos
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
    //Declarando a variavel do email
$mail = new PHPMailer(true);
 
    //Tratando excessões que podem surgir
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tteodoro1977@gmail.com'; //Definindo o email que será enviado
	$mail->Password = 'luiz2002teodoro'; //A senha tem que aer a original do email
	$mail->Port = 587; //Porta do gmail para envio de informações
 
	$mail->setFrom('tteodoro1977@gmail.com');  //Enviando o email
	$mail->addAddress('tteodoro1977@gmail.com'); //Enviando o email
	
 
	$mail->isHTML(true); //Utilizando o isHTML para aparecer em tela o que está acontecendo
	$mail->Subject = 'Teste de email via gmail ';
	$mail->Body = 'Chegou o email teste do <strong>tteodoro1977@gmail.com</strong>';
	$mail->AltBody = 'Chegou o email teste '; //Caso nao funcione o $mail->Body
 

    //Condições se caso o email foi enviado ou não
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>