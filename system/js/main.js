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
acab = document.querySelector('#addcab');//слушаем кнопку на добавление в корзину
acab.addEventListener("click", function(){
		act_mod = acab.parentElement.getAttribute('opt');//give id game for move
		cabin = document.querySelector('#cab');
		cabin.innerHTML = cabin.innerHTML.replace('<img src="">', '<img src="/content/sys/arrows.png">');
		//cabin.innerHTML.replace('<img src="">', '<img src="/content/sys/arrows.png">');
		console.log(act_mod);
		console.log(cabin.innerHTML);
});

function pl_trailer(){
	pl_vid.style.display = 'block';
	//делаем здесь плеер ,а не подгружаем заранее
}
function add_cab(){//добавление игры в корзину
	/*
	1. сканируем все изображения на странице, и если есть метка что это особое изображение(должно робить ток на особых страницах), то активируем при наведении на него всплывающую фишку, добавить в корзину, избранное(желаемое) и переход на страницу продукта
	2. перенос игры в корзину drag & drop
	3. по кнопке на странице игры добавляем в корзину
	*/
		act_mod = acab.parentElement.getAttribute('opt');//give id game for move
		cabin = document.querySelector('#cab');
		cabin.innerHTML;
		console.log(act_mod);
	
}
function load_cab(){//работа связанная с корзиной
	/*
	1. отображение контента добавленного с сылками на их страницы
	2. сброс корзины
	3. переход на оплату
	*/
	
}
});