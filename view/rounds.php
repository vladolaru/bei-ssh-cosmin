<?php include_once 'headerin.php';
include '../model/roundmaker.php';
include '../model/showpersons.php';?>

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

			<p class="has-text-black has-text-centered"><strong>Let's get this going..</strong></p>
			<br>

			<!--Redirectul o sa il fac din algoritmul php de SSH catre pagina roundhistory.php .  -->

			<form action="" method="post">

			<div class="field">
				<br>
				<label class="label">Choose your participants<ion-icon name="text"></ion-icon> </label>
                <div class="select is-multiple">
                    <select multiple size="5">
                        <?php foreach($database_persons as $person)
                            echo "<option value=".$person['email'] .">". $person['email'] . "</option>"
                            ?>
                    </select>
                </div>
                <br>
                <br>

				<label class="label">Recommended budget<ion-icon name="cash"></ion-icon> </label>
				<div class="control ">
					<input name="budget" class="input is-primary" type="text" placeholder="The maximum sum needed for the gifts" value="">
				</div>
				<br>

				<label class="label">Email title(template) <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input name="titleEmail" class="input is-primary" type="text" placeholder="Email title" value="">
				</div>
				<br>

				<label class="label">Email from <ion-icon name="mail"></ion-icon> </label>
				<div class="control ">
					<input name="fromEmail" class="input is-primary" type="email" placeholder="Email address" value="">
				</div>
				<br>

				<label class="label">Email content(template)<ion-icon name="text"></ion-icon> </label>
				<div class="field">
					<div class="control">
						<textarea name="messageEmail" class="textarea is-primary" type="text" placeholder="The message that everyone will receive"></textarea>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<br>
						<button name="send" type="submit" class="button is-rounded is-danger">Send emails</button>
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
