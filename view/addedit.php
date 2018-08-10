<?php include_once 'header.php'; ?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>What is this person all about?</strong></p>
			<br>


			<div class="columns">
				<div class="column is-half">
					<label class="label">First Name<ion-icon name="contact"></ion-icon></label>
					<div class="control ">
						<input class="input is-primary" type="email" value="">
					</div>
				</div>

				<div class="column is-half">
					<label class="label">Last Name<ion-icon name="contact"></ion-icon></label>
					<div class="control ">
						<input class="input is-primary" type="email" value="">
					</div>
				</div>
			</div>


			<label class="label">Email address <ion-icon name="mail"></ion-icon> </label>
			<div class="control ">
				<input class="input is-primary" type="email" placeholder="Email address" value="">
			</div>


			<div class="field">
				<br>
				<label class="label">Personal preferences<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea class="textarea is-primary" type="text" placeholder="What does this person like mostly? What not?"></textarea>
					</div>
				</div>

				<label class="label">Private notes about this person<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea class="textarea is-primary" type="text" placeholder="Something that maybe Santa would like to know..."></textarea>
					</div>
				</div>

					<div class="field is-grouped">
						<div class="control">
							<br>
							<button class="button is-danger is-rounded">Save person's details</button>
						</div>
					</div>
			</div>

			<div class="level">
				<div class="container">
					<p>or...</p>
					<br>
					<div class="container has-text-center">
						<a class="button is-rounded is-black" href="http://pixy.local/ssh/view/login.php">Cancel</a>
					</div>

				</div>
			</div>


		</div>
	</div>
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
