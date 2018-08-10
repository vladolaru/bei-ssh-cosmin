<?php include_once 'header.php'; ?>

<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
</head>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<div class="field">
				<label class="label">Your email <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="Email address" value="">

<div class="field">
	<label class="label">Your password <ion-icon name="text"></ion-icon> </label>
	<div class="control">
		<input class="input is-primary" type="text" placeholder="Password" value="">

<div class="field is-grouped">
	<div class="control">
		<br>
		<button class="button is-link">Login</button>
	</div>
</div>
		</div>
	</div>

	<div class="level">
		<div class="container">
		<p>or...</p>
			<br>
		<div class="container has-text-center">
			<a class="button is-primary">Register a new account</a>
			<a class="button is-primary">Forgot your password?</a>
		</div>

	</div>
	</div>

	</div>
			</div>
		</div>
	</div>
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
