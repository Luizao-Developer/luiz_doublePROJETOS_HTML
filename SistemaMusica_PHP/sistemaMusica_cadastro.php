<?php 
$banco = mysqli_connect("127.0.0.1","root","","projetos_php");
if(isset($_POST['cadastrar'])){

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'], PASSWORD_DEFAULT);



$sql = "insert into site_musica (nome,email,senha) values ('{$nome}','{$email}','{$senha}')";

mysqli_query($banco,$sql);



$mensagem= "Parabéns voce está cadastrado!!!!";
}
$sqla = "select * from site_musica";
$result = mysqli_query($banco,$sqla);
$qtd = mysqli_num_rows($result);
mysqli_close($banco);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="sistemaMusica_cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <h1 style="color:yellow;"></h1>
    <div id="login">
        <form action="" method="post">
            <p>
                <h1>C a d a s t r e  -  se</h1>
            </p>
            <p>
                <label for=""><i class="fas fa-user"></i></label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome/apelido">
            </p>
            <p>
                <label for=""><i class="fas fa-envelope"></i></label>
                <input type="email" name="email" id="email" placeholder="Digite seu email">
            </p>
            <p>
                <label for=""><i class="fas fa-key"></i></label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            </p>
            <p>
                <button type="submit" name="cadastrar">Cadastrar</button>
            </p>
            <footer>
                <?php  
                if(isset($mensagem)){ ?>
                <?php echo $mensagem ?>
                <?php } ?>
            </footer>
        </form>
    </div>
    
</body>
</html>