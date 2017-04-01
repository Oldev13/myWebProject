<?php
$page = '';
if(isset($_GET['page'])){$page = $_GET['page'];}else{$page = 'main';}



?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" />
<?php
//Other style

echo "<link rel=\"stylesheet\" href=\"src/pgStyle/".$page.".css\" />";

?>
<style>
body{
<?
switch ($page){
	case 'main':
	echo "background-image: url(src/img/bgMain.jpg);";
	break;
	case 'guides':
	echo "background-image: url(src/img/bgGuide.jpg);";
	break;
	case 'games':
	echo "background-image: url(src/img/bgGames.jpg);";
	break;
	case 'gms':
	echo "background-image: url(src/img/bgGMs.jpg);";
	break;
	case 'players':
	echo "background-image: url(src/img/bgPlayers.jpg);";
	break;
	case 'characters':
	echo "background-image: url(src/img/bgCharacters.jpg);";
	break;
	case 'fundoms':
	echo "background-image: url(src/img/bgFundoms.jpg);";
	break;
}
echo "background-attachment: fixed;";
echo "background-size:cover;";
echo "background-position:center center;";

?>
}
</style>



</head>
<body>
<div class="content">
<?php
include 'src/'.$page.'.php';
/*
switch ($page){
	case 'main':
	include 'src/main.php';
	break;
	case 'guides':
	include 'src/guides.php';
	break;
	case 'games':
	include 'src/games.php';
	break;
	case 'gms':
	include 'src/gms.php';
	break;
	case 'players':
	include 'src/players.php';
	break;
	case 'characters':
	include 'src/characters.php';
	break;
	case 'fundoms':
	include 'src/fundoms.php';
	break;
	
}*/
?>
</div>

<div class="header">

<a href="index.php?page=main"><img src="src/img/WLogo.png" class="Logo"/><div class="button"><p>Главная</p></div><a>
<a href="index.php?page=guides"><div class="button"><p>Гайды</p></div><a>
<a href="index.php?page=games"><div class="button"><p>Игры</p></div><a>
<a href="index.php?page=gms"><div class="button"><p>Game-Мастеры</p></div><a>
<a href="index.php?page=players"><div class="button"><p>Игроки</p></div><a>
<a href="index.php?page=characters"><div class="button"><p>Персонажи</p></div><a>
<a href="index.php?page=fundoms"><div class="button"><p>Фэндомы</p></div><a>

<div class="button" style="float:right;"><p>Регистрация</p></div>
<div class="butmenu">
<form action="src/login/reg.php" method="post">
<center>
<p>Логин:</p><input type="text" id="regLog">
<p>Пороль:</p><input type="password" id="regPas">
<p>Повторите пороль:</p><input type="password" id="regPasRepeat">
<p>Электронная почта:</p><input type="text" id="regMail"><br><br>
<input type="button" value="Регистрация" id="">
</center>
</form>
</div>
<div class="button" style="float:right;"><p>Вход</p></div>
<div class="butmenu">
<form action="src/login/log.php" method="post">
<center>
<p>Логин:<input type="text"><p>
<p>Пороль:<input type="password"><p>
<input type="button" value="Войти">
</center>
</form>
</div>
<div class="butmenu"></div>
</div>




</body>
</html>