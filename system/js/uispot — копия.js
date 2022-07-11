document.addEventListener("DOMContentLoaded", function(event) { 
e = event || window.event;
def_min = 0; //minimal value
def_max = 10000; //maximum value
def_step = 100; //step

min_now = 0;
max_now = 0;

rmodule = document.querySelector('div[role=rangeslider]'); //общий виджет
ra_mod = document.querySelector('#ra_mod'); //
min_val = document.querySelector('input[role=mindata]'); //pole min data
max_val = document.querySelector('input[role=maxdata]'); //pole max data
min_sel = document.querySelector('div[role=minrange]'); //selector min
max_sel = document.querySelector('div[role=maxrange]'); //selector max

//change в инпутах

//маусдавн на селекторах
ot_def = min_sel.getBoundingClientRect().left
//console.log(ball.getBoundingClientRect().top); //координаты сверху
console.log(ot_def); //координаты слева


var X = min_val; //document.getElementById('X');
var Y = max_val;

const jajas = window.getComputedStyle(min_sel)
const translateX = jajas.getPropertyValue("transform"); //parseInt()
//const translateX = parseInt(min_sel.style.transform)
gang = min_sel.style.transform;
dadat = gang.slice(11, -3);
console.log(dadat);

function tok(e){
  rmodule.addEventListener('mousemove', pos, false);
}
function pok(e){
	rmodule.removeEventListener('mousemove', pos, false);
 // document.removeEventListener('mousemove', pos, false);
  //min_sel.removeEventListener('mousedown', tok, false);
}
function aok(e){
  rmodule.removeEventListener('mousemove', pos, false);
 // document.removeEventListener('mousemove', pos, false);
 // document.removeEventListener('mousedown', pos, false);
  //min_sel.removeEventListener('mousedown', tok, false);
}

function pos(e){
  X.value = e.pageX; //координата слева(по Х) курсора
  Y.value = e.pageY; //координата слева(по Y) курсора
  gang = min_sel.style.transform; //получаем текущий трансформ параметр у нужного нам элемента
  dadat = Number(gang.slice(11, -3)); // получаем цифровую часть строки и переводим в число
  packtX =  X.value - ot_def - 10; //высчитываем сдвиг вычитая из текущего положения курсора, начальное положение справо и половину круглого селектора
  if(packtX >=0 && packtX <= 94){ //проверям сдвиг, чтобы он не выходил за рамки возможного. начало и половина полоски
	//min_sel.style.transform = "translateX("+packtX+"px)"; //задаем сдвиг по иксу
	min_sel.style.left = packtX+"px"; //задаем сдвиг по иксу
	//console.log(packtX + "Отступ слева = "+X.value+"тек. транс круга"+dadat);
  }
}
rmodule.addEventListener('mousedown', tok, false);
rmodule.addEventListener('mouseup', pok, false);
rmodule.addEventListener('mouseover', aok, false);


/*
min_sel.addEventListener('mouseup', e => {
	progressd(min_sel);
});
*/
/*
function progressd(e){
	console.log(e);
	e.addEventListener('mousemove', e => {
		min_now = min_now + (def_step/10);
		console.log(min_now);
		e.style.transform = "translatex("+min_now+"px)";
	});
	//min_sel.style.transform = "translateX("+m_step+"px)";
	//e.style.left = e.clientX - (def_step/10) + "px";
}*/

});