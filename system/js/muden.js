document.addEventListener("DOMContentLoaded", function(event) { 

/*
	1. сканируем все изображения на странице, и если есть метка что это особое изображение(должно робить ток на особых страницах), то активируем при наведении на него всплывающую фишку, добавить в корзину, избранное(желаемое) и переход на страницу продукта
	2. перенос игры в корзину drag & drop
	3. по кнопке на странице игры добавляем в корзину
*/
/*
	1. отображение контента добавленного с сылками на их страницы
	2. сброс корзины
	3. переход на оплату
	4. сохранение позиций при переходах по страницам и перезагрузкам(+мб автообновление корзины раз в 30сек.)
*/

cr_timek = 5000; //timer for move cart
cr_fom = 1; //if 0 - статическая корзина, 1 - нет
cr_iom = 0; //if 0 - статический контент, 1 - нет
cr_stca = '.krug_g3' //id or class .krug_im
cr_know = '';
cr_cab = []; //массив значений в корзине

acab = document.querySelector('#addcab');
fcab = document.querySelector('#favorite');//favorite
cabin = document.querySelector('#cart_val');//value in cart #1
cabin2 = document.querySelector('#cart_val2');//value in cart #2
carimg = document.querySelector('#cart');//cart №1
carimg2 = document.querySelector('#cart2');//cart №2
farimg = document.querySelector('#favor');//favor №1
farimg2 = document.querySelector('#favor2');//favor №2
to4k = document.querySelector('#cr_pod');//to4k cart №2
carmas = document.querySelectorAll(cr_stca);
iarmas = document.querySelectorAll(".krug_im");


//load_car();

setInterval(() => load_car(), cr_timek);//запускает загрузку и проверку корзины

if(acab){
	acab.addEventListener("click", add_cab);//слушаем кнопку на добавление в корзину
}
if(fcab){
	fcab.addEventListener("click", add_fab);//слушаем кнопку на добавление в favorite
}

if(carmas && cr_iom == 0){
	Array.from(carmas, el => el.addEventListener('mouseenter', e => {img_dop(el,e);}));
	Array.from(carmas, el => el.addEventListener('mouseleave', e => {img_eop(el,e);}));
}
if(carmas && cr_iom == 1){
	// Перебираем все элементы img списка и присваиваем нужное значение
	for (task of iarmas) {
		task.draggable = true;
	}
	//перетаскивание в корзину
	Array.from(carmas, el => el.addEventListener('dragstart', e => {cont_d(el,e);}));
	//отпускание прям над корзиной
	document.addEventListener('dragend', e => {cont_v(cr_know,e);})
}

carimg.addEventListener("click", car_watch);



function car_watch(){
	monstr = document.querySelector("#cart_cont");
	if(monstr){}else{
		constr = document.querySelector("#cart_val"); //находим поле значения корзины
		console.log(constr);
		constr2 = constr.parentElement;//.parentElement; //находим поле значения корзины
		constr2.insertAdjacentHTML("beforeend","<div style='position:absolute;padding:5px;right:0px;z-index:99;margin-top: -5px;'><div id='cart_cont' style='width:380px;border-radius:6px;background-color:rgb(255 255 255 / 91%);box-shadow:0 0 3px #444;padding:10px;'></div></div>");
		castr = document.querySelector("#cart_cont");
		if(cr_cab.length<=0){
			castr.innerHTML = "<div style='padding:40px;position:relative;z-index:10;text-align:center;color:gray;background:#fff;height:100px;'><div style='font-size:16px;color:#b400ff;font-weight:600;padding:10px 0px;border-bottom:1px solid #dfdfdf;'>Корзина пуста</div><div style='font-size:12px;text-transform:none;padding:10px 0px;'>Исcледуйте лучшие продукты и предложения</div><div><a href='/store.php'><button id='incler'>Исследовать</button></a></div></div>";
		}else{
			//перебираем cr_cab
			//если кол-во игр больше допустимого, то в конце вместо последней игры отображаемой ставим блок +еще и кол-во оставшихся игр
			// каждую можно удалить с пересчетом оставшихся и  скрытых.
			//castr.innerHTML = "<span>В корзине: "+cr_cab.length+" игр</span>";
			castr.innerHTML = "<div><div><span>Cart</span></div><div style='overflow-x:auto;'><div id='gam_incart' style='display:flex;position:relative;width: 400px;'><div style='width:100px;margin:5px;position:relative;'><div><img src='content/img/83.jpeg' style='width:100%;border-radius: 6px;'></div><div style='font-size:10px;'>Cyberpunk 2077</div></div></div></div><div style='display:flex;margin-top:10px;'><div><button id='incart'>In Cart</button></div><div><button id='incler'>Clear</button></div></div></div>";
			
		}
		constr2.addEventListener('mouseleave', function(){
			//castr.parentElement.remove();
		});
	}
}
function add_cab(){//добавление игры в корзину
		console.log(cr_know);
		tik = Number(cabin.innerText)+1;
		carimg.style.transform = "scale(1.2)";
		carimg2.style.transform = "scale(1.2)";
		setTimeout(function tack(){
			carimg.style.transform = null;
			carimg2.style.transform = null;
			to4k.style.display = 'block';
		}, 1000);
			if(cr_know == ''){cr_know = acab.getAttribute("game");}
			goss = cr_cab.indexOf(cr_know) != -1;
			if(goss){}else{
			cr_cab.push(cr_know);
			console.log(cr_cab);
			cabin.innerHTML = tik;
			cabin2.innerHTML = tik;
			//cr_know == ''; //проверить со страницами нескольких продуктов мб, будет баг с сохранением в перемен. предыдущего значения
			}
	
}
function load_car(){//работа связанная с корзиной
	g = cabin2.innerHTML; //наличие объекта в корзинке
	if(g != 0 && cr_fom == 1){
		//setInterval(() => cart_anim(), cr_timek); //покачивание корзинки
		setTimeout(() => cart_anim());
	}
	
}

function cart_anim(){//анимация качания корзинки из стороны в сторону
	setTimeout(function tick(){carimg2.style.transform = "rotate(0.03turn)";}, 0);
	setTimeout(function tick(){carimg2.style.transform = "rotate(-0.03turn)";}, 100);
	setTimeout(function tick(){carimg2.style.transform = "rotate(0.03turn)";}, 200);
	setTimeout(function tick(){carimg2.style.transform = "rotate(-0.03turn)";}, 300);
	setTimeout(function tick(){carimg2.style.transform = "rotate(0.03turn)";}, 400);
	setTimeout(function tick(){carimg2.style.transform = "rotate(-0.03turn)";}, 500);
	setTimeout(function tick(){carimg2.style.transform = "rotate(0.00turn)";}, 600);
}
function add_fab(){//Добавление в любимое
	farimg.style.transform = "translate(0px, -16px)";//сдвиг вверх
	/*==РАЗВОРОТ==*/
	farimg2.style.transform = "scaleX(-1)";//разворот на обратную сторону
	din = farimg2;//.querySelector('img');
	din.setAttribute('src', 'content/ico/aplus2.png'); //заменяем картинку на +1
	/*==СДВИГ ВВЕРХ==*/
	farimg.insertAdjacentHTML("beforeend","<div id='favr_val' style='color:#000;font-size:12pt;font-weight:600;margin-top:4px;'></div>");
	pin = farimg.querySelector('#favr_val');
	pin.innerHTML = '+1';
	
	setTimeout(function stock(){
		farimg.style.transform = null; //разворот обратно
		farimg2.style.transform = null;
		din.setAttribute('src', 'content/ico/fav2.png');//смена обратно картинки
		pin.remove();//удаление временного блока
	}, 1000);
}

function img_dop(el,e){
	var jok = el; // element krug_g3
	var pok = e; //event
	domn = jok.firstElementChild; // krug_g1
	pint = domn.querySelector("#img_dop");//проверка на существование блока
	cr_know = jok.getAttribute("game");
	if(pint){} else{
		domn.insertAdjacentHTML("afterbegin","<div id='img_dop' style='width: 150px;height: 240px;position:absolute;background-color:rgb(48 48 47 / 64%);border-radius:6px;'><div style='display:flex;margin:100px 10px;'><div style='width:40px;height:40px;background-color:#1f1e1e;border-radius:6px;box-shadow:0 0 2px #050505;margin:2px;cursor:pointer;'><a href='/app/"+cr_know+"'><img style='width:30px;height:30px;padding:5px;' src='content/ico/page.png'></a></div><div id='adcabs' style='width:40px;height:40px;background-color:#db1919;border-radius:6px;box-shadow:0 0 2px #050505;margin:2px;cursor:pointer;'><img style='width:30px;height:30px;padding:5px;' src='content/ico/cart.png'></div><div id='fasori' style='width:40px;height:40px;background-color:#d87d0c;border-radius: 6px;box-shadow:0 0 2px #050505;margin:2px;cursor:pointer;'><img style='width:30px;height:30px;padding:5px;' src='content/ico/fav.png'></div></div></div>");
	}
	scab = document.querySelector('#adcabs');
	mcab = document.querySelector('#fasori');
	scab.addEventListener("click", add_cab);
	mcab.addEventListener("click", add_fab);
}
function img_eop(el,e){
	var kok = el; // element krug_g3
	var lok = e; //event
	dimn = kok.firstElementChild; // krug_g1
	pont = dimn.querySelector("#img_dop");
	if(pont){
		pont.remove();
	}
}
function cont_d(el,e){
	var kok = el; // element krug_g3
	var lok = e; //event
	//if(cr_know == ''){cr_know = kok.getAttribute("game");}
	cr_know = kok.getAttribute("game");
	dinn = kok.firstElementChild; // krug_g1
	pipi = dinn.querySelector(".krug_im");//
	console.log("тащу "+cr_know);
	
}
function cont_v(el,e){
	var kok = el; // element корзина 1
	var lok = e; //event
	add_cab(); //заменить на анимацию корзины
}


});
