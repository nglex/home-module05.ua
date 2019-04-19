<?php
/*session_start();
if($_POST['logout'] == true){
		unset($_SESSION['start']);
	}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorization</title>
</head>
<body>
	<form action="first-page.php" method="POST">
	login: <input type="text" name="login">
	password: <input type="password" name="password">
	<input type="submit" name="Enter">
</form>
	<a href="homework05.php?logout=true">logout</a>
</body>
</html> 