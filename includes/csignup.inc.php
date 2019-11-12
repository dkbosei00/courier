<?php
	

if (isset($_POST['enter'])) {
	require 'dbh.inc.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$pass_word = mysqli_real_escape_string($conn, $_POST['pass_word']);


if (empty($fname) || empty($lname) || empty($pass_word) || empty($tel) || empty($email)) {
	header("Location: ../signup.php?signup=empty");
	exit();
} else {
	if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
	header("Location: ../signup.php?signup=invalid");
	exit();
	} else {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../signup.php?signup=email");
		exit();
		} else {
			$sql = "SELECT * FROM customer WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
			header("Location: ../signup.php?signup=usertaken");
			exit();
			} else {
				$hashedpwd = password_hash($pass_word, PASSWORD_DEFAULT);
				$sql = "INSERT INTO customer (fname, lname, pass_word, tel, email) VALUES ('$fname', '$lname', '$hashedpwd', '$tel', '$email');";
				mysqli_query($conn, $sql);
				header("Location: ../signup.php?signup=success");
				exit();
				//Details were successfully added to the database if 'success' tag is added to the hyperlink after submit button has been pressed.			
			}
		}
	}
}

}else{
	header("Location: ../signup.php");
	exit();
}








