<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('modules/forms/header.php');
?>
<body>
<div class="in_fol"></div>
<div class="mess">
	<div id='header2' class='h_upbl'>
		<div class='_kji_ lef'>
			<div class=''><a class='r_name' href='/'><? echo $rname; ?></a></div>
		</div>
		<div class='_kji_ rih'>
			<div class='_flx'>
<?
if (isset($_SESSION['user_id'])) {
				 echo'
			<div class=""><a href="/user/1"><span id="logi" class="mf_t"><img src="">P</span></a></div>
			<div class=""><a href="/logout"><span id="sigup" class="mf_t"><img src="">E</span></a></div>
			';;
				}else{
				 echo'
			<div class=""><a href="/auth"><span id="logi" class="mf_t"><img src="">L</span></a></div>
			<div class=""><a href="/new"><span id="sigup" class="mf_t"><img src="">N</span></a></div>
				 ';
				}
?>
			</div>
		</div>
	</div>
</div>
<div id="gkHeader" class="mess" style='background-size:cover;background: url(/content/afon/sys.jpg) center;'>
	<div id='zatun'></div><!-- <?echo $rlogo; ?> -->
</div>
<div id='podl'></div>
<div id='header' class='-up2' style='background-color:#ededed;margin-bottom:20px;'>
	<div id='form_serch' style='padding-top:10px;'>
		<div>
			<div class='s_st1'>
			<form id='serch_fr' method='Post' >
				<input id='se_pol' required='required' name='poisk_fn' type='search' placeholder="" autocomplete="off">
				<input id='se_but' name='poisk_bt' type='submit' value>
			</form>
			</div>
		</div>
	</div>
	<div style='height:10px;'></div>
</div>
<div id='header' class='_t'>
	<div class='_flx' style='align-items:stretch;'>
			<div style="width:290px;border-right:1px solid #b1b1b1;min-height:360px;">
				<div style='margin:30px;'>
					<div style='font-size:14px;'>
						<!-- Фильтры поиска -->
						<div role='rangeslider'>
							<div style='display:flex;justify-content:space-between;margin-bottom:20px;'>
								<div>Цена:</div>
								<div role="defstat" style="padding:3px;border-radius:6px;background-color:#9e2abb;height:15px;width:15px;color:#fff;font-size:12px;text-align:center;">Х</div>
							</div>
							<div id='ra_mod' style="position:relative;margin-bottom:20px;">
								<div id='mins' role='minrange' style="width:30px;height:30px;position:absolute;border-radius:30px;margin-top:-15px;left:-5px;transform:translate(0%, 0px);">
									<div id='' style="width:20px;height:20px;background-color:#9e2abb;position:relative;border-radius:10px;margin:5px;">
									</div>
								</div>
								<div role='line' style="height:3px;background-color:#b1b1b1;margin-top:15px;display:flex;">
									<div style='height:3px;background-color:#9e2abb;transform:translate(12.3142%, 0px) scale(1);width:50%;'></div>
									<div style='height:3px;background-color:#9e2abb;transform:translate(-12.3142%, 0px) scale(1);width:50%;'></div>
								</div>
								<div id='maxs' role='maxrange' style="width:30px;height:30px;position:absolute;border-radius:30px;margin-top:-18px;right:-5px;transform:translate(0%, 0px);">
									<div id='' style="width:20px;height:20px;background-color:#9e2abb;position:relative;border-radius:10px;margin:5px;">
									</div>
								</div>
							</div>
							<div style='display:flex;justify-content:space-between;'>
								<div><input role='mindata' placeholder='0' value='0' style="width:90px;height:26px;border:1px solid #b1b1b1;text-indent:6px;font-size:14px;" /></div>
								<div style="padding-top:7px;"> - </div>
								<div><input role='maxdata' placeholder='10000' value='10000' style="width:90px;height:26px;border:1px solid #b1b1b1;text-indent:6px;font-size:14px;" /></div>
							</div>
						</div><br>
						<div><label><input type='checkbox' value=''>бесплатно</label></div>
						<br>
						<div style='display:flex;justify-content:space-between;margin-bottom:5px;'>
							<div>статус релиза:</div>
						</div>
						<div><label><input type='checkbox' value=''>новые</label></div>
						<div><label><input type='checkbox' value=''>ожидаемые</label></div>
						<br>
						<div style='display:flex;justify-content:space-between;margin-bottom:5px;'>
							<div>жанры:</div>
						</div>
						<div><label><input type='checkbox' value=''>гонки</label></div>
						<div><label><input type='checkbox' value=''>приключение</label></div>
						<div><label><input type='checkbox' value=''>ролевая игры</label></div>
						<div><label><input type='checkbox' value=''>симулятор</label></div>
						<div><label><input type='checkbox' value=''>спорт</label></div>
						<div><label><input type='checkbox' value=''>стратегия</label></div>
						<div><label><input type='checkbox' value=''>шутер</label></div>
						<div><label><input type='checkbox' value=''>экшн</label></div>
						<br>
						<div style='display:flex;justify-content:space-between;margin-bottom:5px;'>
							<div>По тегам:</div>
						</div>
						<div><label><input type='checkbox' value=''>инди</label></div>
						<div><label><input type='checkbox' value=''>фентази</label></div>
						<div><label><input type='checkbox' value=''>класика</label></div>
						<div><label><input type='checkbox' value=''>головоломка</label></div>
						<div><label><input type='checkbox' value=''>наука</label></div>
						<div><label><input type='checkbox' value=''>пошаговая стратегия</label></div>
						<div><label><input type='checkbox' value=''>2d</label></div>
						<div><label><input type='checkbox' value=''>атмосферная</label></div>
						<br>
						<div style='display:flex;justify-content:space-between;margin-bottom:5px;'>
							<div>По типу:</div>
						</div>
						<div><label><input type='checkbox' value=''>одиночная</label></div>
						<div><label><input type='checkbox' value=''>кооператив</label></div>
						<div><label><input type='checkbox' value=''>сетевая игра</label></div>
						<div><label><input type='checkbox' value=''>достижения</label></div>
						<div><label><input type='checkbox' value=''>облачные сохранения</label></div>
						<div><label><input type='checkbox' value=''>поддержка контролера</label></div>
						<div><label><input type='checkbox' value=''>бесплатно</label></div>
						<br>
						<div role='rangeslider'>
							<div style='display:flex;justify-content:space-between;margin-bottom:20px;'>
								<div>Дата выхода:</div>
								<div role="defstat" style="padding:3px;border-radius:6px;background-color:#9e2abb;height:15px;width:15px;color:#fff;font-size:12px;text-align:center;">Х</div>
							</div>
							<div id='' style="position:relative;margin-bottom:20px;">
								<div id='' role='' style="width:20px;height:20px;background-color:#9e2abb;position:absolute;border-radius:10px;margin-top:-10px;transform:translateX(0px);"></div>
								<div role='line' style="height:3px;background-color:#b1b1b1;margin-top:15px;display:flex;">
									<div style='height:3px;background-color:#9e2abb;transform:translate(12.3142%, 0px) scale(1);width:50%;'></div>
									<div style='height:3px;background-color:#9e2abb;transform:translate(-12.3142%, 0px) scale(1);width:50%;'></div>
								</div>
								<div id='' role='' style="width:20px;height:20px;background-color:#9e2abb;position:absolute;border-radius:10px;margin-top:-13px;right:0px;"></div>
							</div>
							<div style='display:flex;justify-content:space-between;'>
								<div><input role='' placeholder='1999' value='1999' style="width:90px;height:26px;border:1px solid #b1b1b1;text-indent:6px;font-size:14px;" /></div>
								<div style="padding-top:7px;"> - </div>
								<div><input role='' placeholder='2022' value='2022' style="width:90px;height:26px;border:1px solid #b1b1b1;text-indent:6px;font-size:14px;left:0px;" /></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style='width:950px;'>
			<div style='display:flex;'>
				<div>Показано ХХ игр</div>
				<div>_</div>
			</div>
				<div style="margin:30px 20px;">
					<div style='font-size:14px;display:flex;flex-wrap:wrap;'>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/Cyberpunk'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/83a.jpeg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Cyberpunk 2077</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>1399 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Elden Ring</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>3999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/FFVIIR'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/ff7a.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >FINAL FANTASY VII R...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/HorizonFW'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/87.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Horizon Forbidden...</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>4599 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/NierAutomata'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/nir2_b.jpg' class='krug_im'></a></div>
				<div>
					<div style="font-size:13px;padding:5px 0px 5px 0px;text-transform:none;font-weight:600;"><span class='dec_b' >Nier: Automata</span></div>
					<div style='display:flex;'>
						<div id='per_price' style='padding:5px 10px 5px 5px;background-color:#a411e1;border-radius:3px;color:#fff;font-weight:600;font-size:12px;'>15%</div>
						<div id='old_price' style='padding:5px;font-weight:600;font-size:12px;text-decoration:line-through;color:#ababab;'>1999</div>
						<div id='tek_price' style='padding:5px 10px 5px 0px;font-weight:600;font-size:14px;'>2999 Р</div>
					</div>
				</div>
			</div>
			<div class='krug_g3' style='margin:5px 15px 45px;'>
				<div class='krug_1' style='width:150px;height:240px;'><a href='/app/EldenRing'><img style='width:100%;height:100%;border-radius:6px;box-shadow:0 0 6px #484848;' src='/content/bann/84a.jpg' class='krug_im'></a></div>
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
				</div>
			</div>
	</div>
</div>
<script type="text/javascript" src="/system/js/uispot.js"></script>
<script type="text/javascript" src="/system/js/muden.js"></script>
<?
require_once ('modules/forms/footer.php');
?>
