<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="sistemaMusica_login.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="login">
        <form action="sistemaMusica_validar.php" method="post">
            <?php if(isset($_GET['mensagem'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?=  $_GET['mensagem']  ?>
                </div>
            <?php } ?>
            <p>
                <h3>C o n e c t a r  -  s e</h3>
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
                <button type="submit" name="cadastrar">Acessar</button>
            </p>
            <footer>
                <h6><a href="" style="text-decoration:none; color:blue;">Esqueceu sua senha?</a></h6>
                <h6>Se não possuir conta <a href="sistemaMusica_cadastro.php" style="text-decoration:none; color:blue;">Cadastre-se</a></h6>
            </footer>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>