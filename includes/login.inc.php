<?php 

if (isset($_POST["submit"])) {
	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];

	// database handler
	$serverName = "business139.web-hosting.com";
	$dbUsername = "kimenadu_testloginsystem";
	$dbPassword = "P@ssw0rdP@ssw0rd";
	$dbName = "kimenadu_testLoginSystem";
	$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
	if (!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	}

	// load function
	require_once 'function.inc.php';	
	
	if (emptyInputLogin($username, $pwd) !== false) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}

	loginUser($conn, $username, $pwd);
}
else {
	header("location: ../login.php");
	exit();
}