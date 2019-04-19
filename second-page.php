<?php
echo 'second page';
unset($_SESSION['user']);
unset($_SESSION['lang']);
session_start();
if(!isset($_SESSION['user'])){
	header("Location: homework05.php");
	exit;
}

switch ($_SESSION['lang']) {
	case $_SESSION['lang']=='ru':
		echo '<br/>Привет, '.$_SESSION['user'].'! :)';
		break;
	case $_SESSION['lang']=='en':
		echo '<br/>Hello, '.$_SESSION['user'].'! :)';
		break;
	case $_SESSION['lang']=='ua':
		echo '<br/>Привіт, '.$_SESSION['user'].'! :)';
		break;
	case $_SESSION['lang']=='it':
		echo '<br/>Ciao, '.$_SESSION['user'].'! :)';
		break;
	default:
		if (!isset($_SESSION['lang'])) {

?>
<form action="second-page.php" method="POST">
	language: <input type="text" name="lang">
	<input type="submit" name="lang">
</form>
<?php

		switch ($_POST['lang']) {
			case $_POST['lang']=='ru':
			echo '<br/>Привет, '.$_SESSION['user'].'! :)';	break;
			case $_POST['lang']=='en':
				echo '<br/>Hello, '.$_SESSION['user'].'! :)';	break;	
			case $_SESSION['lang']=='ua':
				echo '<br/>Привіт, '.$_SESSION['user'].'! :)';	break;
			case $_SESSION['lang']=='it':
				echo '<br/>Ciao, '.$_SESSION['user'].'! :)';	break;
			}
		}
		break;
}


/*второй вариант*/
/*if ($_SESSION['lang']=='ru') {
	echo '<br/>Привет, '.$_SESSION['user'].'! :)';
}else{
	if ($_SESSION['lang']=='en') {
		echo '<br/>Hello, '.$_SESSION['user'].'! :)';
	}else{
		if ($_SESSION['lang']=='ua') {
			echo '<br/>Привіт, '.$_SESSION['user'].'! :)';
		}else{
			if ($_SESSION['lang']=='it') {
				echo '<br/>Ciao, '.$_SESSION['user'].'! :)';
			}else{
?>
<form action="second-page.php" method="POST">
	language: <input type="text" name="lang">
	<input type="submit" name="lang">
</form>
<?php
if ($_POST['lang']=='it') {
	header("Location: second-page.php");
	echo '<br/>Ciao, '.$_SESSION['user'].'! :)';
}

				//echo '<br/><a href="homework05.php?logout=true">logout</a>';
			}

		}
	}
}*/
echo '<br/><a href="homework05.php?logout=true">logout</a>';

?>