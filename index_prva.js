

var i = 0;
var images = [];
var time = 5000;
const first = document.getElementById('first');

//NIz slika

var images = new Array("img/img1.jpg","img/img2.jpg","img/img3.png","img/img3.jpg","img/img4.jpg");

//Promeni sliku
function changeImg() {    
    first.style.background = `linear-gradient(rgba(0, 0, 0, 0.2), rgba(0,0,0,0.7)),url(${images[i]}) no-repeat center center fixed`;
    first.style.backgroundSize = `cover`;

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout("changeImg()", time);
}
    first.style.background = `linear-gradient(rgba(0, 0, 0, 0.2), rgba(0,0,0,0.7)),url(${images[i]}) no-repeat center center fixed`;
    first.style.backgroundSize = `cover`;


window.onload = changeImg();