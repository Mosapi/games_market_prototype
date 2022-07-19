document.addEventListener("DOMContentLoaded", function(event) { 
/*показ вспылвающей формы поверх экрана*/
//переписать на универсальный клик, чтобы можно было на все страницы сделать
//берем id игры или название и грузим именно нужный видео
pl_but = document.querySelector('#tr_app');
pl_vid = document.querySelector('#ass');
pl_but.addEventListener("click", function(){
	pint = ''; //id игры
	pl_trailer(pint);
});

function pl_trailer(){
	pl_vid.style.display = 'block';
	//делаем здесь плеер ,а не подгружаем заранее
}

});