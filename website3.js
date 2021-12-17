var musicas =[{audios:"Audios/feel-good-ncs-release.mp3",nome:"feel-good-ncs-release"},
                {audios:"Audios/endless-love-royalty-free-music-no-copyright-music.mp3",nome:"endless-love-royalty-free-music-no-copyright-music"},
                {audios:"Audios/title.mp3",nome:"title"}];

var musica = new Audio();
var musica1 = document.getElementById("musica1");
var musica2 = document.getElementById("musica2");
var musica3 = document.getElementById("musica3");

var tocando_1 = document.getElementById("tocando1");
var tocando_2 = document.getElementById("tocando2");
var tocando_3 = document.getElementById("tocando3");

tocando_1.addEventListener("click",primeiro_toque);
tocando_2.addEventListener("click",segundo_toque);
tocando_3.addEventListener("click",terceiro_toque);

//<i class="fas fa-pause"></i>

function primeiro_toque(){
    if(musica.paused){
        musica.src=musicas[0].audios;
        musica.play();
        tocando_1.innerHTML='<i class="fas fa-pause"></i>';
    }else if(musica.played){
        musica.pause();
        tocando_1.innerHTML = '<i class="fas fa-play"></i>'
    }
}
function segundo_toque(){
    if(musica.paused){
        musica.src=musicas[1].audios;
        musica.play();
        tocando_2.innerHTML='<i class="fas fa-pause"></i>';
    }else if(musica.played){
        musica.pause();
        tocando_2.innerHTML = '<i class="fas fa-play"></i>'
    }
}
function terceiro_toque(){
    if(musica.paused){
        musica.src=musicas[2].audios;
        musica.play();
        tocando_3.innerHTML='<i class="fas fa-pause"></i>';
    }else if(musica.played){
        musica.pause();
        tocando_3.innerHTML = '<i class="fas fa-play"></i>'
    }
}