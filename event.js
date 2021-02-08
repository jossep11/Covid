const imagenes = [
'img/viruss.jpg',
'img/1.jpg',
'img/2.jpg',
'img/3.jpg',
'img/4.jpg',
'img/5.jpg',
'img/6.jpg',
'img/7.jpg'
];
var i = 0;
function cambiarImagen(){
	var img = document.slider.src = imagenes[i];
	if (i < imagenes.length - 1) {
		i++;
	}
	else{
		i = 0;
	}
	setTimeout("cambiarImagen()", 2000);
}
window.onload = cambiarImagen;
