<?php
	session_start();
?>

<link rel="stylesheet" media="all" href="signup.css">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="includes/csignup.inc.php" method="POST">
			<h1>Create Account</h1>
			<input type="text" placeholder="First Name" name="fname"/>
			<input type="text" placeholder="Last Name" name="lname"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="tel" placeholder="Phone Number" name="tel"/>
			<input type="password" placeholder="Password" name="pass_word"/>


			<button name="enter">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="includes/rsignup.inc.php" method="POST">
			<h1>Create Account</h1>
			<input type="text" placeholder="First Name" name="fname"/>
			<input type="text" placeholder="Last Name" name="lname"/>	`
			<input type="tel" placeholder="Phone Number" name="tel"/>
			<input type="password" placeholder="Password" name="pass_word"/>
			<input type="text" placeholder="License Plate" name="lplate"/>
			<input type="text" placeholder="License Number" name="lnumber"/>
			
			<button name="submit">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hey, Buddy!</h1>
				<p>If You're A Customer, Please fill in your details here and get all your packages in no time.</p>
				<button class="ghost" id="signIn">Rider?</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>If You're A Rider, Please fill in you're credentials here to start riding with us.</p>
				<button class="ghost" id="signUp">Customer?</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		<a href="signin.php">Already Have An Account? Log in here!</a> - © MERCURY COURIER
	</p>
</footer>

<script src="signup.js"></script>	