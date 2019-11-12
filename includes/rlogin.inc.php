<?php



if (isset($_POST['submit-signin'])) {
	require 'dbh.inc.php';


	$tel = $_POST['tel'];
	$pass_word = $_POST['pass_word'];

	if (empty($tel) || (empty($pass_word))) {
		header("Location: ..//signin.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM rider WHERE tel=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ..//signin.php?login=wrongemail");
		exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $tel);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($pass_word, $row['pass_word']);
				if ($pwdCheck == false) {
					header("Location: ..//signin.php?login=pwdwrong");
					exit();
				}else if ($pwdCheck == true) {
					session_start();
					$_SESSION['userid'] = $row['id'];
					$_SESSION['utel'] = $row['tel'];

					header("Location: ..//home2.php");
					exit();
					//Login was successful if 'success' tag is seen in hyperlink after submit button has been pressed.
				}
			}
			else {
				header("Location: ..//signin.php?login=nouser");
				exit();
			}

	}
		}
}
else {
	header("Location: ..//signin.php?login=error");
	exit();
}
