<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['ID'])){
    $mensagem = "Sessão expirada. Faça o login novamente.";
    header("location: sistemaMusica_login.php?mensagem={$mensagem}");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sistemaMusica_tela.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <title>Sistema Musica</title>
</head>
<body onload="mostra_horas()">
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand">Músical</a>
    <a class="navbar-brand" id="relogio">00:00</a>
    <form class="d-flex">
        
        <button class="btn btn-outline-success" type="submit"><?=$_SESSION['nome'] ?></button>
    </form>
    </div>
</nav>
<div class="card-group">
    <div class="card">
    <img src="imagens/crowd-g31563116e_640.jpg" class="card-img-top" alt="imagem 1">
    <div class="card-body">
            <h5 class="card-title">Musica 1</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tocar
            </button>

<!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Som</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <audio src="sons/feel-good-ncs-release.mp3"  controls loop></audio>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar escutando</button>
                
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="card">
    <img src="imagens/equalizer-gf0aac2d6e_640.png" class="card-img-top" alt="...">
    <div class="card-body">
            <h5 class="card-title">Musica 2</h5>
            <div class="card-body">
            
            <audio src="sons/title.mp3" controls loop></audio>
            <audio src="sons/cloud-9-ncs-release.mp3" controls loop></audio>
            <audio src="sons/candyland-ncs-release.mp3" controls loop></audio>
            <audio src="sons/endless-love-royalty-free-music-no-copyright-music.mp3" controls loop></audio>
            </div>
    </div>
    </div>
    <div class="card">
    <img src="imagens/samsung-gee9bf6c16_640.jpg" class="card-img-top" alt="...">
    <div class="card-body">
            <h5 class="card-title">Musica 3</h5>
            <audio src="sons/honor-main-title-theme-from-the-pacific.mp3" controls loop></audio>
            <audio src="sons/main-theme.mp3" controls loop></audio>
            <audio src="sons/oogway-ascends-kung-fu-panda-soundtrack.mp3" controls loop></audio>
            <audio src="sons/Rise of Nations soundtrack - WilliamWallace.mp3" controls loop></audio>
    </div>
    </div>
</div>
<script>
            
        function mostra_horas(){
            var data = new Date();
            var horas = data.getHours();
            var minutos = data.getMinutes();
            var segundos = data.getSeconds();
            var minhaHora = document.getElementById("relogio");

            minhaHora.innerHTML = horas + ":" + minutos;
            var tiktak = setInterval(mostra_horas,1000);
        }
        mostra_horas();
</script>
</body>
</html>