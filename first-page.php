<?php
session_start();
	$users = [
		0 => [
			'login'=>'Vasisualiy', 
			'password' => '12345', 
			'lang'=>'ru',
		],
		1 => [
			'login'=>'Afanasiy', 
			'password' => '54321', 
			'lang'=>'en',
		],
		2 => [
			'login'=>'Petro', 
			'password'=>'EkUC42nzmu', 
			'lang'=>'ua',
		],
		3 => [
			'login'=>'Pedrolus', 
			'password'=>'Cogito_ergo_sum', 
			'lang'=>'it',
		],
		4 => [
			'login'=>'Sasha', 
			'password'=>'Alea_est_jacta',
		]
	];

for ($i=0; $i < 5; $i++) { 
	if($_POST['Enter']){
		if(($_POST['login']==$users[$i]['login'])&&($_POST['password']==$users[$i]['password'])){
			$_SESSION['user'] = $_POST['login'];
			$_SESSION['lang'] = $users[$i]['lang'];
			header("Location: second-page.php");
			exit;
		}
	}
}
?>
<html><body>
Неверный пароль!
<a href="homework05.php?logout=true">logout</a>
</body></html>