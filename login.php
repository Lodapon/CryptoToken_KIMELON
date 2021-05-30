<?php 
	include_once 'header.php';
?>

<div class="signup-form" id="">
	<h2>Log in</h2>
	<section class="wrapper-center">
		<form action="includes/login.inc.php" method="post">  <!-- .inc is stand for include file -->
			<input type="text" name="uid" placeholder="Username/email...">
			<input type="password" name="pwd" placeholder="Password...">
			<button type="submit" name="submit">Log in</button>
		</form>

		<?php 
			if (isset($_GET["error"])) {
				if ($_GET["error"]=="emptyinput") {
					echo "<p>Please fill all inputs field.</p>";
				}
				if ($_GET["error"]=="noaccount") {
					echo "<p>Incorrect login information, No such an account.</p>";
				}
				if ($_GET["error"]=="wronglogin") {
					echo "<p>Incorrect login information.</p>";
				}
				if ($_GET["error"]=="passwordincorrect") {
					echo "<p>Incorrect password.</p>";
				}
				if ($_GET["error"]=="nousername") {
					echo "<p>Incorrect username.</p>";
				}				
			}
		?>
	</section>
</div>



<?php 
	include_once 'footer.php';
?>