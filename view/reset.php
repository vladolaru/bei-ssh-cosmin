<?php include_once 'header.php'; ?>

<html>
<body>

<section class="section">
	<div class="container">
		<div class="notification">

			<form action="../model/changepassword.php" method="post">

			<p class="has-text-black has-text-centered"><strong>Reset your password</strong></p>

			<br>
			<div class="field">
				<label class="label">New Password</label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="The new password" name="password1">
					<br>
					<label class="label">New Password Confirmation</label>
					<div class="control ">
						<input class="input is-primary" type="email" placeholder="The confirmation of the password you want" name="password2">
					<br>
                        <br>
						<button type="submit" class="button is-rounded is-danger" name="set">Set password</button>

					</form>
					</div>
			</div>

			<div class="level">
				<div class="container">
					<br>
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
