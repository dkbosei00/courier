<?php
	session_start();
?>

<link rel="stylesheet" media="all" href="signin.css">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="includes/clogin.inc.php" method="POST">
			<h1>Welcome Back!</h1>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="pass_word" />


			<button name="submit-login">Log In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="includes/rlogin.inc.php" method="POST">
			<h1>Nice Seeing You Again!</h1>
			<input type="tel" placeholder="Phone Number" name="tel" />
			<input type="password" placeholder="Password" name="pass_word" />
			
			<button name="submit-signin">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hey, Buddy!</h1>
				<p>If You're A Customer, hop right to the task and get your package delivered ASAP!</p>
				<button class="ghost" id="signIn">Rider?</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>If You're A Rider, I'm sure you're rearing to go. Just remind us who you are and you're off!</p>
				<button class="ghost" id="signUp">Customer?</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		<a href="signup.php">Don't Have An Account Yet? Click Here To Sign Up!</a> - © MERCURY COURIER
	</p>
</footer>

<script src="signin.js"></script>	