<?php include_once 'headerin.php';
include '../model/adding.php';?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<?php
			if(!empty($errors)){
				foreach ($errors as $error){
					echo  "<p class=\"has-text-primary has-text-centered\"><strong>$error</strong></p><br>";
				}
			}
			?>

			<p class="has-text-black has-text-centered"><strong>What is this person all about?</strong></p>
			<br>
			<form action="" method="post">

			<div class="columns">
				<div class="column is-half">
					<label class="label">First Name<ion-icon name="contact"></ion-icon></label>
					<div class="control ">
						<input name="first_name" class="input is-primary" type="text" value="">
					</div>
				</div>

				<div class="column is-half">
					<label class="label">Last Name<ion-icon name="contact"></ion-icon></label>
					<div class="control ">
						<input name="last_name" class="input is-primary" type="text" value="">
					</div>
				</div>
			</div>


			<label class="label">Email address <ion-icon name="mail"></ion-icon> </label>
			<div class="control ">
				<input name="email" class="input is-primary" type="email" placeholder="Email address">
			</div>


			<div class="field">
				<br>
				<label class="label">Personal preferences<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea name="preferences" maxlength="150" class="textarea is-primary" type="text" placeholder="What does this person like mostly? What not?(optional)"></textarea>
					</div>
				</div>

				<label class="label">Private notes about this person<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea name="private_notes" maxlength="150" class="textarea is-primary" type="text" placeholder="Something that maybe Santa would like to know...(optional)"></textarea>
					</div>
				</div>

					<div class="field is-grouped">
						<div class="control">
							<br>
							<button type="submit" class="button is-rounded is-danger" name="save">Save person's details</button>
						</div>
					</form>
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
