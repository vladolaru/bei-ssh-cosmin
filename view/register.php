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

				<div class="container">
					<div class="field">
						<div class="level">

							<div class="field">
								<label class="label">First Name</label>
								<div class="control ">
									<input class="input is-primary" type="text"  value="">
								</div>
							</div>

							<div class="field">
								<label class="label">Last Name</label>
								<div class="control">
									<input class="input is-primary" type="text"  value="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<label class="label">Your email address <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="Email address" value="">
				</div>

					<div class="field">
						<label class="label">Your password <ion-icon name="text"></ion-icon> </label>
						<div class="control">
							<input class="input is-primary" type="text" placeholder="Password" value="">

							<div class="field is-grouped">
								<div class="control">
									<br>
									<button class="button is-link">Register</button>
								</div>
							</div>
						</div>
					</div>

					<div class="level">
						<div class="container">
							<p>or...</p>
							<br>
							<div class="container has-text-center">
								<a class="button is-primary">Log into your account</a>
							</div>

						</div>
					</div>


			</div>
		</div>
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
