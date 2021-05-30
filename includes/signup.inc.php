<?php

if (isset($_POST["submit"])) {

	// database handler
	$serverName = "business139.web-hosting.com";
	$dbUsername = "kimenadu_testloginsystem";
	$dbPassword = "P@ssw0rdP@ssw0rd";
	$dbName = "kimenadu_testLoginSystem";
	$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
	if (!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	}


	// obtain input data
	$name = $_POST['name']; //Link to 'name' attribute in signup <form>
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['pwdrepeat'];

	// load function
	require_once 'function.inc.php';

	// Check come constraint before create new user
	if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=pwddontmatch");
		exit();
	}
	if (emailExist($conn, $email) !== false) {
		header("location: ../signup.php?error=emailalreadyused");
		exit();
	}

	if (uidExists($conn, $username) !== false) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	// After check enough, then create new user into db
	createUser($conn, $name, $email, $username, $pwd);


} 
else {
	header("location: ../signup.php");
	exit();
}

