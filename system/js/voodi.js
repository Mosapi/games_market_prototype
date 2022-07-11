document.addEventListener("DOMContentLoaded", function(event) { 
//узнаем ширину страницы(область виденья)  чтобы от этого маштабировать все ост элементы
//выбираем все элементы(или нет) ??
/*
pl_but = document.querySelector('#tr_app');
pl_vid = document.querySelector('#ass');
pl_but.addEventListener("click", function(){
	pl_trailer();
});
*/
portal();
function portal(){
	pageWidth = document.documentElement.clientWidth;
	pageHeight = document.documentElement.clientHeight;
	console.log(pageWidth);
	console.log(pageHeight);
}
});