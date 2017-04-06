<?php
include('header.php');
?>

	<!-- LOGIN FORM -->
	<form method="POST" action="includes/login.inc.php">
		<input type="text" name="uid" placeholder="Username"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button type="submit">Loguj se</button>
	</form>
	<br>
	<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in";
	}
	?>

	<!-- SIGN UP FORM -->
	<form method="POST" action="includes/signup.inc.php">
		<input type="text" name="first" placeholder="Firstname"><br>
		<input type="text" name="last" placeholder="Lasttname"><br>
		<input type="text" name="uid" placeholder="Username"><br>
		<input type="password" name="pwd" placeholder="Password"><br>
		<button type="submit">Registruj se</button>
	</form>

	<br>
	<!-- LOG OUT FORM -->
	<form action="includes/logout.inc.php">
		<button>Logout</button>
	</form>

</body>
</html>