document.addEventListener("DOMContentLoaded", function(event) { 
	
	defaultban = "85.jpg"; //default banner
	defaulttit = "FINAL FANTASY VII REMAKE"; //default titul
	defauldesc = "Cloud Strife, бывший оперативник SOLDIER, отправляется в питаемый энергией мако город Midgar. Мир вечной классики FINAL FANTASY VII возрождается, получив новейшую графику, новую боевую систему и дополнительные приключения с Yuffie Kisaragi"; //default description
	defaulpage = "FFVIIR"; //default page
	path = "content/afon/"; //path to content
	m_delay = imgs.length; //3
	df_timer = 5000; //time wait before change banner
	df_bann = "#gkHeader"; //default id or class banner block
	df_rubd = "#sl"; //non change part id control blocks bottom
	df_rubs = "._shblo"; //class or id control blocks bottom
	df_titl = "#_nam"; //id or class title description
	df_cont = "#_dext"; //class or id description object
	df_actc = "_acti"; //class active state control blocks bottom
	df_arrow = "._arr"; //class arrow selectors
	df_lper = "_pl"; //class left arrow
	df_rper = "_pr"; //class right arrow
	df_uapp = "#sapp"; //id url container

	banner = document.querySelector(df_bann);
	title = document.querySelector(df_titl);
	content = document.querySelector(df_cont);
	bpage = document.querySelector(df_uapp);
	blbut = document.querySelectorAll(df_rubs); // all selectors bottom
	barow = document.querySelectorAll(df_arrow); // all arrows
	
	//задавать дефолтовые параметры отсюда при загрузке страницы

	// auto scroll selectors + banners
	setInterval(() => bl_update(), df_timer);

	// click change banners+ selectors on a buttons
	Array.from(blbut, el => el.addEventListener('click', e => {
	banch = e.target.getAttribute('id');
	wiol = banch.substring(2);
	bl_upcha(wiol);
	})
	);

	// click change banners+ selectors on arrows
	Array.from(barow, el => el.addEventListener('click', e => {
	klik = e.target.getAttribute('id');
	bl_chang(klik);
	})
	);

	function bl_chang(klik){
	a_state = klik;
	curid = document.querySelector('.'+df_actc).getAttribute('id').substring(2);
	if(a_state == df_lper){
		if(curid == 0){
			tcurid = Number(curid) + m_delay;
			timgg = imgs[tcurid-1];
			ttitl = titlet[tcurid-1];
			tdesc = descr[tcurid-1];
			tlink = links[tcurid-1];
			banner.setAttribute('style','background: url('+path+timgg+') center;');
			title.innerText = ttitl;
			content.innerText = tdesc;
			bpage.href = "/app/"+tlink;
			for (var q =0, ql=blbut.length; q< ql; q++){
				qot = blbut[q];
				qant = qot.getAttribute('id').substring(2);
				if(qant != tcurid){
					if(qot.classList.contains(df_actc)){
						qot.classList.remove(df_actc);
					}
				}else{
					qot.classList.add(df_actc);
				}
			}
		}else{
			tcurid = Number(curid) - 1;
			if(tcurid == 0){
				timgg = defaultban;
				ttitl = defaulttit;
				tdesc = defauldesc;
				tlink = defaulpage;
				banner.setAttribute('style','background: url('+path+timgg+') center;');
				title.innerText = ttitl;
				content.innerText = tdesc;
				bpage.href = "/app/"+tlink;
				for (var w =0, wl=blbut.length; w< wl; w++){
					wot = blbut[w];
					want = wot.getAttribute('id').substring(2);
					if(want != tcurid){
						if(wot.classList.contains(df_actc)){
							wot.classList.remove(df_actc);
						}
					}else{
						wot.classList.add(df_actc);
					}
				}
			}else{
				timgg = imgs[tcurid-1];
				ttitl = titlet[tcurid-1];
				tdesc = descr[tcurid-1];
				tlink = links[tcurid-1];
				banner.setAttribute('style','background: url('+path+timgg+') center;');
				title.innerText = ttitl;
				content.innerText = tdesc;
				bpage.href = "/app/"+tlink;
				for (var w =0, wl=blbut.length; w< wl; w++){
					wot = blbut[w];
					want = wot.getAttribute('id').substring(2);
					if(want != tcurid){
						if(wot.classList.contains(df_actc)){
							wot.classList.remove(df_actc);
						}
					}else{
						wot.classList.add(df_actc);
					}
				}
			}
		}
	}else{
		if(curid >= 0 && curid<m_delay){
			tcurid = Number(curid) + 1;
			wimgg = imgs[tcurid-1];
			wtitl = titlet[tcurid-1];
			wdesc = descr[tcurid-1];
			wlink = links[tcurid-1];
			banner.setAttribute('style','background: url('+path+wimgg+') center;');
			title.innerText = wtitl;
			content.innerText = wdesc;
			bpage.href = "/app/"+wlink;
			for (var q =0, ql=blbut.length; q< ql; q++){
				qot = blbut[q];
				qant = qot.getAttribute('id').substring(2);
				if(qant != tcurid){
					if(qot.classList.contains(df_actc)){
						qot.classList.remove(df_actc);
					}
				}else{
					qot.classList.add(df_actc);
				}
			}
		}else{
			tcurid = Number(curid) - 3;
			wimgg = defaultban;
				wtitl = defaulttit;
				wdesc = defauldesc;
				wlink = defaulpage;
				banner.setAttribute('style','background: url('+path+wimgg+') center;');
				title.innerText = wtitl;
				content.innerText = wdesc;
				bpage.href = "/app/"+wlink;
				for (var w =0, wl=blbut.length; w< wl; w++){
					wot = blbut[w];
					want = wot.getAttribute('id').substring(2);
					if(want != tcurid){
						if(wot.classList.contains(df_actc)){
							wot.classList.remove(df_actc);
						}
					}else{
						wot.classList.add(df_actc);
					}
				}
		}	
	}	
	}

	function bl_upcha(curid){
	if(curid == 0){
		for (var i =0, bl=blbut.length; i< bl; i++){
			dot = blbut[i];
			pant = dot.getAttribute('id').substring(2);
			if(pant != curid){
				if(dot.classList.contains(df_actc)){
					dot.classList.remove(df_actc);
				}
			}else{
				dot.classList.add(df_actc);
			}
		}
		bimga = defaultban;
		btitl = defaulttit;
		bdesc = defauldesc;
		blink = defaulpage;
		banner.setAttribute('style','background: url('+path+bimga+') center;');
		title.innerText = btitl;
		content.innerText = bdesc;
		bpage.href = "/app/"+blink;
		curid++;
	}else{ 
		if(curid<m_delay){
			for (var j =0, sl=blbut.length; j< sl; j++){
			kot = blbut[j];
			rant = kot.getAttribute('id').substring(2);
			if(rant != curid){
				if(kot.classList.contains(df_actc)){
					kot.classList.remove(df_actc);
				}
			}else{
				kot.classList.add(df_actc);
			}
			}
			bimga = imgs[curid - 1];
			btitl = titlet[curid - 1];
			bdesc = descr[curid - 1];
			blink = links[curid - 1];
			banner.setAttribute('style','background: url('+path+bimga+') center;');
			title.innerText = btitl;
			content.innerText = bdesc;
			bpage.href = "/app/"+blink;
			curid++;
		}else if(curid>=m_delay){
			for (var l =0, tl=blbut.length; l< tl; l++){
			sot = blbut[l];
			rant = sot.getAttribute('id').substring(2);
			if(rant != curid){
				if(sot.classList.contains(df_actc)){
					sot.classList.remove(df_actc);
				}
			}else{
				sot.classList.add(df_actc);
			}
			}
			bimga = imgs[curid - 1];
			btitl = titlet[curid - 1];
			bdesc = descr[curid - 1];
			blink = links[curid - 1];
			banner.setAttribute('style','background: url('+path+bimga+') center;');
			title.innerText = btitl;
			content.innerText = bdesc;
			bpage.href = "/app/"+blink;
			curid = curid - curid;
		}
	}
	}

	async function bl_update(){
	curid = document.querySelector('.'+df_actc).getAttribute('id').substring(2);
	df_state = document.querySelector('.'+df_actc).getAttribute('id');

	if(curid == 0){
		tik = Number(curid)+1;
		podla0 = document.querySelector('#'+df_state);
		podla1 = document.querySelector(df_rubd+tik);
		bimg = imgs[tik-1];
		btitl = titlet[tik-1];
		bdesc = descr[tik-1];
		blink = links[tik-1];
		banner.setAttribute('style','background: url('+path+bimg+') center;');
		title.innerText = btitl;
		content.innerText = bdesc;
		bpage.href = "/app/"+blink;
		if(podla0.classList.contains(df_actc)){
			podla0.classList.remove(df_actc);
		}
		if(!podla1.classList.contains(df_actc)){
			podla1.classList.add(df_actc);
		}
	}else{
		if(curid<m_delay){
			pik = Number(curid) + 1;
			podla0 = document.querySelector('#'+df_state);
			podla1 = document.querySelector(df_rubd+pik);
			bimg = imgs[pik - 1];
			btitl = titlet[pik - 1];
			bdesc = descr[pik - 1];
			blink = links[pik - 1];
			banner.setAttribute('style','background: url('+path+bimg+') center;');
			if(podla0.classList.contains(df_actc)){
				podla0.classList.remove(df_actc);
			}
			if(!podla1.classList.contains(df_actc)){
				podla1.classList.add(df_actc);
			}
			title.innerText = btitl;
			content.innerText = bdesc;
			bpage.href = "/app/"+blink;
		}
		if(curid>=m_delay){
			tik = curid - curid;
			podla0 = document.querySelector(df_rubd+Number(tik+m_delay));
			podla1 = document.querySelector(df_rubd+tik);
			bimg = defaultban;
			btitl = defaulttit;
			bdesc = defauldesc;
			blink = defaulpage;
			banner.setAttribute('style','background: url('+path+bimg+') center;');
			if(podla0.classList.contains(df_actc)){
				podla0.classList.remove(df_actc);
			}
			if(!podla1.classList.contains(df_actc)){
				podla1.classList.add(df_actc);
			}
			title.innerText = btitl;
			content.innerText = bdesc;
			bpage.href = "/app/"+blink;
		}
	}
	}

});