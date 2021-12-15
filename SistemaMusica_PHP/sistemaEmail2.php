<?php 
if(isset($_POST['enviar'])){
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];

$headers ="From:". $nome;

$corpoemail = 'Obrigado por vender suas informações
                Nome:' . $nome. '
                Email:'.$email.'
                Assunto:' .$assunto.' 
                Mensagem:' .$msg.'';

if(mail("tteodoro1977@gmail.com","Suas informações são nossas",$corpoemail,$headers)){

    echo "<script>alert('Email enviado com sucesso')</script>";
    header("Location: sistemaEmailForms.php");
}else{
    echo "<script>alert('Erroooooo')</script>";
}
}

?>