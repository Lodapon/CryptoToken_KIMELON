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
	</section>
</div>



<?php 
	include_once 'footer.php';
?>