<?php
include('header.php');
?>

<?php
//Requires complete URL
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'error=empty') !== false) {
	echo "Fill out all fields!";
} elseif (strpos($url, 'error=username') !== false) {
	echo "Username already exists!";
} 

if (isset($_SESSION['id'])) {
	echo "<p>Hi there usere</p>";
} else {
	echo "You are not logged in";
}
?>

<?php
if (isset($_SESSION['id'])) {
	echo "You are already logged in!";
} else {
	echo "
	<form method='POST' action='includes/signup.inc.php'>
		<input type='text' name='first' placeholder='Firstname'><br>
		<input type='text' name='last' placeholder='Lasttname'><br>
		<input type='text' name='uid' placeholder='Username'><br>
		<input type='password' name='pwd' placeholder='Password'><br>
		<button type='submit'>SIGN UP</button>
	</form>";
} 
?>
</body>
</html>