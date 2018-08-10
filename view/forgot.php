<?php include_once 'header.php'; ?>

<html>
<body>

<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>Password Reset Email</strong></p>
			<br>
			<h3 class="has-text-black has-text-centered">We will send you an email to the address below with the information needed for you to change your password.</h3>
			<br>
			<br>
			<div class="field">
				<label class="label">Your email <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="Email address" value="">
					<br>
					<br>
					<button class="button is-rounded is-danger">Send email</button>

				</div>
			</div>

					<div class="level">
						<div class="container">
							<p>or...</p>
							<br>
							<div class="container has-text-center">
								<a class="button is-primary is-rounded" href="http://pixy.local/ssh/view/login.php">Log into your account</a>
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
