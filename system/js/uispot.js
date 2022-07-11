document.addEventListener("DOMContentLoaded", function(event) { 
//e = event || window.event;
def_min = 0; //minimal value
def_max = 10000; //maximum value
def_step = 100; //step

min_now = 0;
max_now = 0;
min_drag = false;
max_drag = false;

rmodule = document.querySelector('div[role=rangeslider]'); //общий виджет
ra_mod = document.querySelector('#ra_mod'); //
min_val = document.querySelector('input[role=mindata]'); //pole min data
max_val = document.querySelector('input[role=maxdata]'); //pole max data
min_sel = document.querySelector('div[role=minrange]'); //selector min
max_sel = document.querySelector('div[role=maxrange]'); //selector max

//const min_sel = min_sel;//document.querySelector(".element");

var startX = 0;
var startY = 0;

/*
выбираем все селекторы круглые
определ. каой именно зажат
исходя из этого двигаем его как можно меняя соответ инпут



*/
//====== MIN ====== //
min_sel.addEventListener("dragstart", (e) => {
 min_drag = true
 const style = window.getComputedStyle(min_sel)
 const transform = new DOMMatrixReadOnly(style.transform);
 const translateX = transform.m41;
 const translateY = transform.m42;
 console.log(transform.m41);
 
 startX = e.pageX - translateX
 startY = e.pageY - translateY
 
});

//document.body.addEventListener("mousemove", (e) => {
	/*
rmodule.addEventListener("mousemove", (e) => {

  if(!min_drag){
	  return;
  }else{
	  packtX = e.pageX - startX;
	  if(packtX >=0 && packtX <= 94){
		  min_sel.style.transform = "translate("+packtX+"px, 0px)";
	  }
  }
});*/
//====== MIN ====== //
//====== MAX ====== //
max_sel.addEventListener("mousedown", (e) => {
 max_drag = true
 const style = window.getComputedStyle(max_sel)
 const transform2 = new DOMMatrixReadOnly(style.transform);
 const translateX2 = transform2.m41;
 const translateY2 = transform2.m42;
 console.log(transform2.m41);
 
 startX = e.pageX - translateX2
 startY = e.pageY - translateY2
 
});

rmodule.addEventListener("mousemove", (e) => {
  if(!max_drag){
	  return;
  }else{
	  packtX2 = e.pageX - startX;
	  if(packtX2 >=-94 && packtX2 <= 0){
		  max_sel.style.transform = "translate("+packtX2+"px, 0px)";
	  }
  }
});
//====== MAX ====== //
/*
document.body.addEventListener("mouseup", () => {
  dragging = false;
});*/

});