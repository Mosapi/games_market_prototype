<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('modules/forms/header.php');
?>
<body>
<div class="in_fol"><? //require_once ('system/include/forms/signup_in.php'); ?></div>
<div class="mess">
	<div id='header2' class='h_upbl'>
		<div class='_kji_ lef'>
			<div class=''><? echo $rname; ?></div>
		</div>
		<div class='_kji_ rih'>
			<div class='_flx'>
<?
if (isset($_SESSION['user_id'])) {
				 echo'
			<div class="c_mod"><a href="content/Alauncher.exe"><span id="down" class="mf_t _b"><img src="content/ico/down.png"></span></a></div>
				<div class="c_mod"><a><span id="cart" class="mf_t _r"><img src="content/ico/cart.png"></span></a><div id="cart_val"></div></div>
				<div class="c_mod"><a href="/user/1"><span class="mf_t _q"><img src="/content/ico/prof.png"></span></a></div>
				 ';
				}else{
				 echo'
			<div class="c_mod"><a href="content/Alauncher.exe"><span id="down" class="mf_t _b"><img src="/content/ico/down.png"></span></a></div>
				<div class="c_mod"><a href="/auth"><span class="mf_t _q"><img src="/content/ico/prof.png"></span></a></div>
				<div class="c_mod"><a href="/new"><span id="favor" class="mf_t _l"><img src="/content/ico/reg.png"></span></a></div>
				 ';
				}
?>
			</div>
		</div>
	</div>
	<div id='header2' class='_g _flx'>
		<div class='_dey'><div id='_pl' class='_arr'></div></div>
		<div class='sht'>
			<a id='sapp' href='app/FFVIIR'><div id='_nam'>FINAL FANTASY VII REMAKE</div></a>
			<div id='_dext'>Cloud Strife, бывший оперативник SOLDIER, отправляется в питаемый энергией мако город Midgar. Мир вечной классики FINAL FANTASY VII возрождается, получив новейшую графику, новую боевую систему и дополнительные приключения с Yuffie Kisaragi</div>
		</div>
		<div class='_dey _rde'><div id='_pr' class='_arr'></div></div>
	</div>
	<!--<div id='header2' class='_shkont'>
	<div class='_shiv _flx'>
		<div id='sl0' class='_shblo _acti'></div>
		<div id='sl1' class='_shblo'></div>
		<div id='sl2' class='_shblo'></div>
		<div id='sl3' class='_shblo'></div>
		<div id='sl4' class='_shblo'></div>
	</div>
	</div>-->
</div>
<div id="gkHeader" class="mess" style='background-size:cover;background: url(/content/afon/85.jpg) center;'>
	<div id='zatun'></div><!-- <?echo $rlogo; ?> -->
</div>
<div id='podl'></div>
<div id='header2' class='_shkont -up'>
	<div class='_shiv _flx'>
		<div id='sl0' class='_shblo _acti'></div>
		<div id='sl1' class='_shblo'></div>
		<div id='sl2' class='_shblo'></div>
		<div id='sl3' class='_shblo'></div>
		<div id='sl4' class='_shblo'></div>
	</div>
</div>
<div id='header' class='_t ' style='border-radius:6px;'>
	<div id='form_serch'>
		<div>
			<div class='s_st1'>
			<form id='serch_fr' method='Post' action='/store'>
				<input id='se_pol' required='required' name='poisk_fn' type='search' placeholder="" value='' autocomplete="off">
				<input id='se_but' name='poisk_bt' type='submit' value>
			</form>
			</div>
		</div>
	</div>
	<div>
		<div class='top_rd' style="margin-top:30px;"><p>Скидки / Акции</p></div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
	<div>
		<div class='top_rd' style="height:30px;text-align:center;width:500px;margin-bottom:20px;margin-top:20px;">
			<p style="width:120px;text-align:center;background-color:#ededed;position:relative;margin:auto;">Популярное</p>
			<div style="border-bottom:2px solid #b1b1b1;margin-top:-10px;"></div>
		</div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div class='top_rd'><p>Случайный Тайтл</p></div>
<div id='header' class='_t' style="border-radius:6px;box-shadow:none;background-image: url(content/afon/na11.png);background-size: cover;background-position-y: -150px;">
<div style="background-color:rgb(0 0 0 / 20%);height:360px;border-radius:6px;">
	<div style='height:10px;'></div>
		<div style='padding: 20px 40px 0px 20px;display:flex;justify-content:flex-end;'>
			<div class='krug_g4' style='margin:5px 15px;'>
				<div style="width:400px;height:270px;background-color:#000;border-radius:6px;"></div>
			</div>
			<div class='krug_g4' style='margin:5px 15px;'>
				<div style="color:#fff;font-weight:600;font-size:14px;">Nier: Automata</div>
				<div style="color:#fff;font-weight:300;font-size:11px;margin:20px 0px;text-transform:none;"><span>Nier: Automata (NieR new project) — это непрямой сиквел NIER, действие которого разворачивается на порабощенной боевыми роботами Земле. Игроки берут на себя роль боевых андроидов из подразделений YoRHa. Геймплей представляет собой гибрид игрового стиля NieR / Drakengard и Platinum Games (например, Bayonetta). Некоторые элементы из Nier, которые перенесены и дальше, - это несколько типов оружия, атаки снарядами и уклонение.</span></div>
				<div >
					<div style="color:#fff;font-weight:600;font-size: 14pt;float: right;padding: 10px 8px;background-color: #857666;border-radius: 6px;">2999 P</div>
				</div>
				<div style="display:flex;">
					<div class="c_mod"><a href="/app/NierAutomata"><span id="cart" class="mf_t _q"><img src="/content/ico/page.png"></span></a><div id="cart_val"></div></div>
					<div class="c_mod"><a><span id="cart" class="mf_t _r"><img src="/content/ico/cart.png"></span></a><div id="cart_val"></div></div>
					<div class="c_mod"><a href="#favorite"><span id="favor" class="mf_t _s"><img src="/content/ico/fav.png"></span></a></div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div class='top_rd'><div style='height:60px;'></div></div>
<div id='header' class='_t' style='background-color:#484848;color:#fff;border-radius:6px;'>
<div>
	<div style='height:10px;'></div>
	<div class='top_rd'><p style='color:#fff;'>Новинки</p></div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div id='header' class='' style='border-radius:6px;margin-top:40px;margin-bottom:10px;background-color:#ededed;'>
<div>
	<div class='top_rd' style="padding-bottom:1px;padding-top:1px;"><p>Недавно обновленные</p></div>
</div>
</div>
<div id='header' class='_t' style='border-radius:6px;box-shadow:none;background-color:#f5f5f5;'>
<div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div id='header' class='_t' style='border-radius:6px;box-shadow:none;background-color:#f5f5f5;'>
<div>
	<div style='height:10px;'></div>
	<div class='top_rd'><p>Бесплатно</p></div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div style='height:60px;'></div>
<div id='header' class='_t' style='border-radius:6px;'>
<div>
	<div style='height:10px;'></div>
	<div class='top_rd'><p>Скоро появятся</p></div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px;'>
				<div class='krug_1' style='width:170px;height:270px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<div style='height:60px;'></div>
<div id='header' class='_t' style='border-radius:6px;'>
<div>
	<div style='height:10px;'></div>
	<div class='top_rd'><p>Новости</p></div>
		<div style='padding-left:20px;padding-right:20px;display:flex;'>
			
		</div>
		<div style='height:30px;'></div>
	</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(event) { 
imgs = ["82.jpg", "82b.jpg", "84.jpg", "87b.jpg"]; //0,1,2
links = ["Cyberpunk2077", "NierAutomata", "EldenRing", "HorizonFW"];
titlet = ["Cyberpunk 2077", "Nier: Automata", "Elden Ring", "Horizon Forbidden West"];
descr = ["Приключенческая ролевая игра с открытым миром, рассказывающая о киберпанке-наёмнике Ви и борьбе за жизнь в мегаполисе Найт-Сити.", "Nier: Automata (NieR new project) — это непрямой сиквел NIER, действие которого разворачивается на порабощенной боевыми роботами Земле.", "НОВЫЙ ФЭНТЕЗИЙНЫЙ РОЛЕВОЙ БОЕВИК. Восстань, погасшая душа! Междуземье ждёт своего повелителя. Пусть благодать приведёт тебя к Кольцу Элден.", "Отправьтесь вместе с Элой в путешествие по величественному, но опасному миру Запретного запада, который скрывает новые загадочные угрозы."];
});
</script>
<script type="text/javascript" src="/system/js/decolation.js"></script>
<?
require_once ('modules/forms/footer.php');
?>
