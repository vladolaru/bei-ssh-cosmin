<?php include_once 'header.php'; ?>

<html>
<body>

<section class="section">
	<div class="container">
		<div class="notification">

            <!--Redirectul o sa il fac din algoritmul php catre pagina persons.php .  -->

            <form action="roundhistory.php" method="post">

            <p class="has-text-black has-text-centered"><strong>Get that Santa going...</strong></p>
            <br>

			<div class="field">
				<label class="label">Your email <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input class="input is-primary" type="email" placeholder="Email address" value="">

<div class="field">
	<br>
	<label class="label">Your password <ion-icon name="text"></ion-icon> </label>
	<div class="control">
		<input class="input is-primary" type="text" placeholder="Password" value="">

<div class="field is-grouped">
	<div class="control">
		<br>
        <button type="submit" class="button is-rounded is-danger">Login</button>
    </div>
</div>
		</div>
	</div>
            </form>

	<div class="level">
		<div class="container">
		<p>or...</p>
			<br>
		<div class="container has-text-center">
            <a class="button is-primary is-rounded" href="http://pixy.local/ssh/view/register.php">Register a new account</a>
            <a class="button is-primary is-rounded" href="http://pixy.local/ssh/view/reset.php">Forgot your password?</a>
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
