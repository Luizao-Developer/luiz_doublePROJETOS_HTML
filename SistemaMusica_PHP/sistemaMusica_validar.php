<?php 
if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $conexao = mysqli_connect("127.0.0.1","root","","projetos_php");
    $sql = "select * 
        from site_musica
        where email = '{$email}'";
    $resultado = mysqli_query($conexao,$sql); //Execução do banco

    $totalDeRegistros =  mysqli_num_rows($resultado);

    $nome = mysqli_fetch_array($resultado);

    if($totalDeRegistros == 1 && password_verify($_POST['senha'],$nome['senha'])){
        
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['ID']    = $nome['ID'];
        $_SESSION['nome']  = $nome['nome'];
        $_SESSION['email'] =$nome['email'];

        header("location: sistemaMusica_tela.php");
        die();
    }else{
        $mensagem = "Usuário ou senha inválidos";
        header("location: sistemaMusica_login.php?mensagem={$mensagem}");
        die();
    }
}






?>