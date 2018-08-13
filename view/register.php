<?php include_once 'header.php'; ?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

            <!--Redirectul o sa il fac din algoritmul php catre pagina persons.php, userul fiind deja logat .  -->

            <form action="roundhistory.php" method="post">

            <p class="has-text-black has-text-centered"><strong>You are just one step away...</strong></p>
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
                                    <button type="submit" class="button is-rounded is-danger">Register</button>
                                </form>
								</div>
							</div>
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
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
