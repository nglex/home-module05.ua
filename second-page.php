<?php session_start(); 
if(!isset($_SESSION['user'])){
	header("Location: homework05.php");
	exit;
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<body>
<?php
echo 'second page';

// switch ($_SESSION['lang']) {
// 	case $_SESSION['lang']=='ru':
// 		echo '<br/>Привет, '.$_SESSION['user'].'! :)';
// 		break;
// 	case $_SESSION['lang']=='en':
// 		echo '<br/>Hello, '.$_SESSION['user'].'! :)';
// 		break;
// 	case $_SESSION['lang']=='ua':
// 		echo '<br/>Привіт, '.$_SESSION['user'].'! :)';
// 		break;
// 	case $_SESSION['lang']=='it':
// 		echo '<br/>Ciao, '.$_SESSION['user'].'! :)';
// 		break;
// 	}
?>
<form action="second-page.php" method="POST">
	language: <input type="text" name="lang">
	<input type="submit" >
</form>
<?php
$trans = [
'ru'=>'Привет, ',
'ua'=>'Привіт, ',
'en'=>'Hello, ',
'it'=>'Ciao, ',
];
if(isset($_POST['lang'])){
	$_SESSION['lang'] = $_POST['lang'];
}
//var_dump($_SESSION);
echo $trans[$_SESSION['lang']].  ' '. $_SESSION['user'];

echo '<br/><a href="homework05.php?logout=true">logout</a>';
?>
</body>
</html> 