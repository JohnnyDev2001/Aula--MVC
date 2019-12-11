var url_atual = window.location.href;
var slide = document.querySelector('#carouselExampleControls');

var bool = url_atual == 'http://localhost/MusicSpace/' || url_atual == 'http://localhost/MusicSpace/#' || url_atual == 'http://localhost/MusicSpace/#cont' || url_atual == 'http://localhost/MusicSpace/?s=&category=&filter%5Bbrand%5D%5B%5D=1&filter%5Bslider0%5D=0&filter%5Bslider1%5D=3779' || url_atual == 'http://localhost/MusicSpace/?s=&category=&filter%5Bbrand%5D%5B%5D=2&filter%5Bslider0%5D=0&filter%5Bslider1%5D=3779' || url_atual == 'http://localhost/MusicSpace/?s=&category=&filter%5Bbrand%5D%5B%5D=3&filter%5Bslider0%5D=0&filter%5Bslider1%5D=3779';

console.log(bool);

if(bool == true){
    slide.hidden = false;
}else{
    slide.hidden = true;
}