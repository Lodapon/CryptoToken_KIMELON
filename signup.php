<?php 
	include_once 'header.php';
?>

<div class="signup-form" id="">
	<h2>Sign Up</h2>
	<section class="wrapper-center">
		<form action="includes/signup.inc.php" method="post">  <!-- .inc is stand for include file -->
			<input type="text" name="name" placeholder="Full Name...">
			<input type="text" name="email" placeholder="Email...">
			<input type="text" name="uid" placeholder="Username...">
			<input type="password" name="pwd" placeholder="Password...">
			<input type="Password" name="pwdrepeat" placeholder="Repeat Password...">
			<button type="submit" name="submit">Sign Up</button>
		</form>

		<?php 
			if (isset($_GET["error"])) {
				if ($_GET["error"]=="emptyinput") {
					echo "<p>Please fill all inputs field.</p>";
				}
				if ($_GET["error"]=="invaliduid") {
					echo "<p>The username must contain only letter or number.</p>";
				}
				if ($_GET["error"]=="invalidemail") {
					echo "<p>Your email is not valid.</p>";
				}
				if ($_GET["error"]=="pwddontmatch") {
					echo "<p>Password and repeat password don't match, try again.</p>";
				}
				if ($_GET["error"]=="emailalreadyused") {
					echo "<p>This email is already in used.</p>";
				}
				if ($_GET["error"]=="usernametaken") {
					echo "<p>This username is already taken.</p>";
				}
				if ($_GET["error"]=="none") {
					echo "<p>Your account has already created!</p>";
				}
			}
		?>
	</section>
</div>


<?php 
	include_once 'footer.php';
?>