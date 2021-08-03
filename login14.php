<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com banco de dados</title>
    <link rel="stylesheet" href="login14.css">
    
</head>
<body>
    <section>
        <h1>C A D A S T R O</h1>
        <form action="" method="get">
            <p>Email:</p>
            <input type="email" name="Vaemail" id="email" placeholder="Insira seu email">
            <p>Senha:</p>
            <input type="password" name="Msenha" id="senha" placeholder="Insira sua senha">
            <div id="botao">
                <button type="submit" id="acessar">Cadastrar</button>
                <p>Ou</p>
                <button type="submit" id="facebook">f</button>
            </div>
        </form>
    </section>
    <?php 
    $receberEmail = $_GET['Vaemail'];
    $receberSenha = $_GET['Msenha'];

    $email = $receberEmail;
    $senha = $receberSenha;

    $banco = mysqli_connect("127.0.0.1","root","","logindados");

    $sql = "insert into usuario (email,senha) values ('{$email}','{$senha}')";

    mysqli_query($banco, $sql);
    
    
    
    
    
    
    ?>
</body>
</html>