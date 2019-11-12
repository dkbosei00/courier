<?php
	

if (isset($_POST['submit'])) {
	require 'dbh.inc.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$pass_word = mysqli_real_escape_string($conn, $_POST['pass_word']);
$lplate = mysqli_real_escape_string($conn, $_POST['lplate']);
$lnumber = mysqli_real_escape_string($conn, $_POST['lnumber']);

if (empty($fname) || empty($lname) || empty($pass_word) || empty($tel) || empty($lplate) || empty($lnumber)) {
	header("Location: ../signup.php?signup=empty");
	exit();
} else {
	if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
	header("Location: ../signup.php?signup=invalid");
	exit();
	} else {
			$sql = "SELECT * FROM rider WHERE tel='$tel'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
			header("Location: ../signup.php?signup=usertaken");
			exit();
			} else {
				$hashedpwd = password_hash($pass_word, PASSWORD_DEFAULT);
				$sql = "INSERT INTO rider (fname, lname, pass_word, tel, lplate, lnumber) VALUES ('$fname', '$lname', '$hashedpwd', '$tel', '$lplate', '$lnumber');";
				mysqli_query($conn, $sql);
				header("Location: ../signup.php?signup=success");
				exit();
				//Details were successfully added to the database if 'success' tag is added to the hyperlink after submit button has been pressed.			
			}
	}
}

}else{
	header("Location: ../signup.php");
	exit();
}








