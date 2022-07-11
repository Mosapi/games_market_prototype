<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('modules/forms/header.php');

if (isset($_GET['logout'])) { 
$logout = $_GET['logout'];
if ($logout == 1) {
unset($_SESSION['nLog']);
unset($_SESSION['nPas']);
unset($_SESSION['ip']);
unset($_SESSION['user_id']); 
header("Location: http://".$_SERVER['HTTP_HOST']."/store"); session_destroy();}}
?>
<body>
<div class="in_fol"><? /*require_once('modules/forms/signup_in.php'); */?></div>
<div class="mess">
	<div id='header' class='h_upbl'>
		<div class='_kji_ lef'>
			<div class=''><a class='r_name' href='/'><? echo $rname; ?></a></div>
		</div>
		<div class='_kji_ rih'>
			<div class='_flx'>
<?
if (isset($_SESSION['user_id'])) {
				 echo'
			<div class=""><a href="/edit"><span id="logi" class="mf_t"><img src=""></span></a></div>
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
<div id="gkHeader" class="mess" style='background: url(/content/afon/y1.jpg) center;background-size:cover;'>
	<div id='zatun'></div><!-- <?echo $rlogo; ?> -->
</div>
<div id='podl'></div>
<div id='header' class='_t -up' style='border-radius:6px;'><!--  -->
	<div style='width:100%;max-width:1240px;'>
		<div class='_flx' style='align-items:stretch;'>
			<div style='width:800px;'>
				<div style='width:234px;height:350px;background-color:#fff;margin-left:60px;margin-top:-60px;border-radius:6px'><img src="/content/avatars/y1.jpg" style="width: 100%;height:100%;box-shadow:0 0 3px rgb(72 72 72 / 68%);border-radius: 6px;"></div>
				<div style="position: absolute;left: 330px;top: 30px;">
					<div style='font-size:24px;color:#7d6d5e;'> Nickname </div>
					<div style='font-size:12px;color:#484848;margin-top:6px;'> @Nickname </div>
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
					<div style='margin-top:30px;text-transform:none;'> NieR:Automata — ролевая игра, в которой игроки берут на себя роль боевых андроидов из подразделений YoRHa. Геймплей представляет собой гибрид игрового стиля NieR / Drakengard и Platinum Games (например, Bayonetta). Некоторые элементы из Nier, которые перенесены и дальше, - это несколько типов оружия, атаки снарядами и уклонение. Некоторые враги могут стрелять шарами, как и в предыдущей игре. Новые функции включают в себя планирование, использование нескольких типов оружия без переключения оружия, спринт и удаление заклинаний из предыдущей игры. </div>
				</div>
				<div style="margin-left:60px;margin-top:30px;">
					<div style='font-size:14px;border-bottom:1px solid;width:200px;'> Доска </div>
					<div style='margin-top:30px;text-transform:none;display:flex;'>
						
					</div>
				</div>
			</div>
			<div style='width:440px;'>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Достижения: </div>
					<div style='margin-top:30px;'>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Друзья: </div>
					<div style='margin-top:30px;'>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Игры: </div>
					<div style='margin-top:30px;'>
					</div>
				</div>
				<div style='margin-top:30px;margin-left:60px;'>
					<div style='font-size:14px;border-bottom:1px solid; width:300px;'> Желаемое: </div>
					<div style='margin-top:30px;'>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style='height:30px;'></div>
</div>
<?
require_once ('modules/forms/footer.php');
?>
