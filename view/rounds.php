<?php include_once 'header.php'; ?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>Let's get this going..</strong></p>
			<br>

			<!--Redirectul o sa il fac din algoritmul php de SSH catre pagina roundhistory.php .  -->

			<form action="roundhistory.php" method="post">

			<div class="field">
				<br>
				<label class="label">Choose your participants<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea class="textarea is-primary" type="text" placeholder="Persons that will participate in the event"></textarea>
					</div>
				</div>

				<label class="label">Recommended budget<ion-icon name="cash"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="text" placeholder="The maximum sum" value="">
				</div>
				<br>

				<label class="label">Email title(template) <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="text" placeholder="Email title" value="">
				</div>
				<br>

				<label class="label">Email from <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="Email address" value="">
				</div>
				<br>

				<label class="label">Email content(template)<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea class="textarea is-primary" type="text" placeholder="The message that everyone will receive"></textarea>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<br>
						<button type="submit" class="button is-rounded is-danger">Send emails</button>
					</div>
				</div>
			</div>
			</form>

			<div class="level">
				<div class="container">
					<p>or...</p>
					<br>
					<div class="container has-text-center">
						<a class="button is-rounded is-black" href="http://pixy.local/ssh/view/roundhistory.php">Cancel</a>
					</div>

				</div>
			</div>


		</div>
	</div>
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
