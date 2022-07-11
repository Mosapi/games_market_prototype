<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('modules/forms/header.php');
?>
<body>
<div class="in_fol"><? require_once('modules/forms/dop_win.php'); ?></div>
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
			<div class=""><a><span id="cab" class="mf_t"><img src=""></span></a></div>
			<div class=""><a href="/user/1"><span id="logi" class="mf_t"><img src=""></span></a></div>
			<div class=""><a href="/logout"><span id="sigup" class="mf_t"><img src=""></span></a></div>
			';
				}else{
				 echo'
			<div class=""><a href="/auth"><span id="logi" class="mf_t"><img src=""></span></a></div>
			<div class=""><a href="/new"><span id="sigup" class="mf_t"><img src=""></span></a></div>
				 ';
				}
?>
			</div>
		</div>
	</div>
</div>
<div id='tr_app' style="width:140px;height:140px;position: absolute;z-index:25;left:50%;margin-left:-100px;top:150px;">
	<img src="/content/sys/plat.png" style="width:100%;height:100%;opacity:0.7;cursor:pointer;">
</div>
<div id="gkHeader" class="mess" style='background: url(/content/afon/82.jpg) center;background-size:cover;'>
	<div id='zatun'></div>
</div>
<div id='podl'></div>
<div id='header' class='_t -up' style='border-radius:6px;'>
	<div style='width:100%;max-width:1240px;'>
		<div class='_flx' style='align-items:stretch;'>
			<div style='width:800px;'>
				<div style='width:234px;height:350px;background-color:#fff;margin-left:60px;margin-top:-60px;border-radius:6px;'><img src="/content/bann/83a.jpeg" style="width: 100%;height:100%;box-shadow:0 0 3px rgb(72 72 72 / 68%);border-radius:6px;"></div>
				<div style="position: absolute;left: 330px;top: 30px;">
					<div style='font-size:24px;color: #000;'> Cyberpunk 2077 </div>
					<div style='font-size:12px;color:#484848;margin-top:6px;'><a href='/store'>Магазин</a> | Cyberpunk 2077 </div>
					<div style='margin-top:40px;' class='table_har'>
						<div style='display:flex;line-height:20px;'>
							<div style='width:100px;'>ЖАНР:</div>
							<div style='color:#7d6d5e;'>ЭКШН - РПГ - ФАНТАСТИКА - СЛЕШЕР</div>
						</div>
						<div style='display:flex;line-height:20px;'>
							<div style='width:100px;'>РАБОТАЕТ НА:</div>
							<div style='color:#7d6d5e;'>WINDOWS (10)</div>
						</div>
						<div style='display:flex;line-height:20px;'>
							<div style='width:100px;'>ДАТА ВЫХОДА:</div>
							<div style='color:#7d6d5e;'>17 МАРТА 2017 Г.</div>
						</div>
						<div style='display:flex;line-height:20px;'>
							<div style='width:100px;'>КОМПАНИЯ:</div>
							<div style='color:#7d6d5e;'>PlatinumGames / SQUARE ENIX</div>
						</div>
						<div style='display:flex;line-height:20px;'>
							<div style='width:100px;'>РЕЙТИНГ:</div>
							<div style='color:#7d6d5e;'>PEGI Рейтинг: 16+</div>
						</div>
					</div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid; width:200px;'> Описание </div>
					<div style='margin-top:30px;text-transform:none;'> Cyberpunk 2077 — приключенческая ролевая игра с открытым миром, рассказывающая о киберпанке-наёмнике Ви и борьбе за жизнь в мегаполисе Найт-Сити. Мрачное будущее стало ещё более впечатляющим в улучшенной версии, в которую вошли новые дополнительные материалы. Создайте персонажа, выберите стиль игры и начните свой путь к высшей лиге, выполняя заказы, улучшая репутацию и оттачивая навыки. Ваши поступки влияют на происходящее и на весь город. В нём рождаются легенды.  </div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='margin-top:30px;text-transform:none;font-size:1.2em;'> Приключенческая ролевая игра с открытым миром, рассказывающая о киберпанке-наёмнике Ви и борьбе за жизнь в мегаполисе Найт-Сити. Мрачное будущее стало ещё более впечатляющим в улучшенной версии, в которую вошли новые дополнительные материалы. Создайте персонажа, выберите стиль игры и начните свой путь к высшей лиге, выполняя заказы, улучшая репутацию и оттачивая навыки. Ваши поступки влияют на происходящее и на весь город. В нём рождаются легенды.  </div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid;width:200px;'> Скриншоты: </div>
					<div style='margin-top:30px;text-transform:none;overflow-x:auto;overflow-y:hidden;'>
					<div style='display:flex;flex-wrap:nowrap;width:1200px;'>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20771.jpg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20772.jpeg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20773.jpg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20774.jpg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20775.jpg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20776.jpg'></div>
						<div style="width:200px;height:130px;"><img style="height:100%;" src='/content/imgs/cp20777.jpg'></div>
					</div>
					</div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid;width:200px;'> Системные требования </div>
					<div style='margin-top:30px;text-transform:none;display:flex;'>
						<div>
							<div style='display:flex;line-height:20px;margin-bottom:20px;'>
								<div style="width: 100%;text-align: center;">МИНИМАЛЬНЫЕ СИСТЕМНЫЕ ТРЕБОВАНИЯ:</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>СИСТЕМА:</div>
								<div style='color:#7d6d5e;width:260px;'>Windows 10 (64-bit)</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ПРОЦЕССОР:</div>
								<div style='color:#7d6d5e;width:260px;'>Intel Core i5-3570K or AMD FX-8310</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ПАМЯТЬ:</div>
								<div style='color:#7d6d5e;width:260px;'>8 GB RAM</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ГРАФИКА:</div>
								<div style='color:#7d6d5e;width:260px;'>NVIDIA GeForce GTX 970 or AMD Radeon RX 470</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>DIRECT X:</div>
								<div style='color:#7d6d5e;width:260px;'>12</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>МЕСТО НА ДИСКЕ:</div>
								<div style='color:#7d6d5e;width:260px;'>70 GB of available space - SSD recommended (100 GB for offline installer)</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ДРУГОЕ:</div>
								<div style='color:#7d6d5e;width:260px;'>Requires a 64-bit processor and operating system</div>
							</div>
						</div>
						<div>
							<div style='display:flex;line-height:20px;margin-bottom:20px;'>
								<div style="width: 100%;text-align: center;">РЕКОМЕНДОВАННЫЕ СИСТЕМНЫЕ ТРЕБОВАНИЯ:</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>СИСТЕМА:</div>
								<div style='color:#7d6d5e;width:260px;'>Windows 10 (64-bit)</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ПРОЦЕССОР:</div>
								<div style='color:#7d6d5e;width:260px;'>Intel Core i7-4790 or AMD Ryzen 3 3200G</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ПАМЯТЬ:</div>
								<div style='color:#7d6d5e;width:260px;'>12 GB RAM</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ГРАФИКА:</div>
								<div style='color:#7d6d5e;width:260px;'>GTX 1060 6GB, GTX 1660 Super or Radeon RX 590</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>DIRECT X:</div>
								<div style='color:#7d6d5e;width:260px;'>12</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>МЕСТО НА ДИСКЕ:</div>
								<div style='color:#7d6d5e;width:260px;'>70 GB of available space - SSD recommended (100 GB for offline installer)</div>
							</div>
							<div style='display:flex;line-height:20px;'>
								<div style='width:100px;'>ДРУГОЕ:</div>
								<div style='color:#7d6d5e;width:260px;'>Requires a 64-bit processor and operating system</div>
							</div>
						</div>
					</div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid;width:200px;'> ПОХОЖЕЕ: </div>
					<div style='margin-top:30px;text-transform:none;display:flex;'>
					</div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid;width:200px;'> ОТЗЫВЫ ПОЛЬЗОВАТЕЛЕЙ: </div>
					<div style='margin-top:30px;text-transform:none;display:flex;'>
					</div>
				</div>
			</div>
			<div style='width:440px;'>
				<div style='width:350px;height:180px;background-color:#fbfbfb;margin-left:40px;margin-top:-60px;box-shadow:0 0 3px rgb(72 72 72 / 68%);border-radius:6px;'>
					<div>
						<div style="height:90px;display: flex;color: #000;font-size: 42px;">
							<div style="width: 90px;margin: auto 0;background-color: #a411e1;text-align: right;height: 50px;border-radius: 0px 3px 3px 0px;line-height: 50px;color: #fff;padding: 0px 12px 3px 0px;font-size:32px;display:block;">-50%</div>
							<div class='_plat'>
								<div style="font-size:22px;color:#b1b1b1;text-decoration:line-through;margin-bottom:10px;display:block;">1999</div>
								<div class='tt_cell'>1399</div>
							</div>
						</div>
						<div style="height: 50px;padding: 10px;padding-bottom: 0px;" opt='cp2077'>
							<button id='#addcab' style="height: 40px;width: 330px;background-color:#000;color:#fff;font-weight:600;border-radius:6px;border:none;box-shadow:0 0 3px rgb(72 72 72 / 68%);">Добавить в корзину</button>
						</div>
						<div style="height:30px;text-align:center;">Добавить в желаемое</div>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style=''>
						<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Особенности игры: </div>
					</div>
					<div style='margin-top:30px;'>
						<div style=''>Достижения</div>
						<div style=''>Облачные сохранения</div>
						<div style=''>Поддержка контроллера</div>
						<div style=''>Оверлей</div>
						<div style=''>Одиночная игра</div>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style=''>
						<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Рейтинги игры: </div>
					</div>
					<div style='margin-top:30px;'>
						<div style=''>8,5/10</div>
						<div style=''>9/10</div>
						<div style=''>10/10</div>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style=''>
						<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Дополнительный контент: </div>
					</div>
					<div style='margin-top:30px;'>
						<div style=''>Саундтрек</div>
						<div style=''>Дополнение 1.5</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style='height:30px;'></div>
</div>
<script type="text/javascript" src="/system/js/main.js"></script>
<?
require_once ('modules/forms/footer.php');
?>
</body>