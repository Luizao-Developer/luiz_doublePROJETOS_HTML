
var titular =document.getElementById('nomeM')
var autor = document.getElementById('autor');
var imagens = document.getElementById('fotoMusica')
var musica = new Audio();
var posicArray = 0;
var indicador = document.getElementById('indicador')
var musicas = [
{
    nomeAudio:"Audios/endless-love-royalty-free-music-no-copyright-music.mp3",
    autores:"Dirty Mack",
    imagem:"Imagens/fotoMusica2.jpg",
    title:"endless-love-royalty-free-music-no-copyright-music"
},
{
    nomeAudio:"Audios/feel-good-ncs-release.mp3",
    autores:"Syn Cole",
    imagem:"Imagens/fotoMusica1.jpg",
    title:"feel-good-ncs-release"
},
{
    nomeAudio:"Audios/title.mp3",
    autores:"artist",
    imagem:"Imagens/fotoMusica3.jpg",
    title:"title.mp3"
},
{
    nomeAudio:"Audios/honor-main-title-theme-from-the-pacific.mp3",
    autores:"The Pacific Series",
    imagem:"Imagens/fotoMusica4.jpg",
    title:"honor-main-title-theme-from-the-pacific"

},
{
    nomeAudio:"Audios/oogway-ascends-kung-fu-panda-soundtrack.mp3",
    autores:"Hans Zimmer",
    imagem:"Imagens/fotoMusica5.jpg",
    title:"oogway-ascends-kung-fu-panda-soundtrack"
}
];
var toque = document.getElementById('tocar');
$("#tocar").click(function(){

    if(musica.paused){
    
        musica.src=musicas[posicArray].nomeAudio;
        musica.play();
        imagens.src=musicas[posicArray].imagem;
        tocar.innerHTML=`<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAI0lEQVRIiWNgGAWjYFiA/0gYn9ioBaMWjFowmC0YBaNggAEAfoM7xeGFS3YAAAAASUVORK5CYII="/>`;
        imagens.style.transform = 'rotate('+ 360 + 'deg)'
    }else{
        tocar.innerHTML = `<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAYElEQVRIie3UMQ2AQBBE0VciAylIQQgJOEECEpByMiihupLQ3ITmfjL1T3Z2l04nzYExKbhxYcGQEtScmJOCmh1TUnCjYNWgnzdBs7H9JijYhEYUKzm2ptFDi7+KTuebB1NFO550b58LAAAAAElFTkSuQmCC"/>`;
        musica.pause();
    }
    titular.innerHTML = `${musicas[posicArray].title}`
    autor.innerHTML = `${musicas[posicArray].autores}`
});
$("#anterior").click(function(){
    posicArray++;
    if(posicArray < 5){
        posicArray == 0
    }else{
        $(tocar);
    }
});
$("#proximo").click(function(){
    posicArray++;
    if(posicArray > 0){
        posicArray == 0;
    }else{
        $(tocar);
    }
});
musica.addEventListener('timeupdate',function () {
    var durando = musica.currentTime / musica.duration ;
    indicador.style.transform = 'translateX('+ durando * 100 +'px)'
})


