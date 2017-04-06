<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Title of document</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<?php
				if (isset($_SESSION['id'])) {
					echo "<form action='includes/logout.inc.php'>
					<button>Logout</button>
				</form>";
			} else {
				echo "<form method='POST' action='includes/login.inc.php'>
				<input type='text' name='uid' placeholder='Username'>
				<input type='password' name='pwd' placeholder='Password'>
				<button type='submit'>Login</button>
			</form>";				} 

			?>
			<li><a href="signup.php">SIGN UP</a></li>
		</ul>
	</nav>
</header>