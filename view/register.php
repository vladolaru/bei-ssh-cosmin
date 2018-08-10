<?php include_once 'header.php'; ?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">


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
									<button class="button is-danger">Register</button>
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
