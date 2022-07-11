<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('modules/forms/header.php');

if (isset($_SESSION['nLog'])){
	header("Location: http://".$_SERVER['HTTP_HOST']."/store");
}
if (isset($_POST['nLog'])){
	$nLog=($_POST['nLog']);
	$nPas=(md5(md5($_POST['nPas'])));
	$res = mysqli_query($link, "SELECT * FROM users WHERE login='$nLog' AND password='$nPas'");
	// or trigger_error(mysqli_error().$res)
if ($row = mysqli_fetch_assoc($res)){
/*if(!isset($_SESSION)){
    session_start();
}*/	
$_SESSION['user_id'] = $row['id'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['nLog'] = $row['login'];
$_SESSION['nPas'] = $row['pass'];
header("Location: http://".$_SERVER['HTTP_HOST']."/store");
	}else{
		echo'<div style="position:absolute;left:10%;top:320px;background-color:#fff;color:red;font-weight:bolder;font-size:12px;margin-left:-10px;padding:5px;z-index:99;">Wrong login or password</div>';}
}
if (isset($_REQUEST[session_name()])) session_start();if (isset($_SESSION['user_id']) AND $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) return; else {
require_once ('modules/forms/loginf.php');
}
exit;
?> 
