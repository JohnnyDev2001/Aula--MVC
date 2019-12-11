var url_atual = window.location.href;
var slide = document.querySelector('#carouselExampleControls');

var bool = url_atual == 'http://localhost/MusicSpace/' || url_atual == 'http://localhost/MusicSpace/#';

console.log(bool);

if(bool == true){
    slide.hidden = false;
}else{
    slide.hidden = true;
}