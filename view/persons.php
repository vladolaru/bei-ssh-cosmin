<?php include_once 'headerin.php';
include '../model/connection.php';
include '../model/showpersons.php';?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>Your Secret Santa players</strong></p>
			<br>

			<!--Paragraful de mai jos e constant adaugat cand apare un user nou, numarul se itereaza si scade automat.  -->

			<?php foreach($database_persons as $person){
			    $index=0; $index++;
				echo "
                <nav class=\"level\">
				<p class=\"level-item has-text-centered\"><strong>
		        ". "." . $person['first_name'] . " " . $person['last_name'] ."</strong></p>
				<p class=\"level-item has-text-centered\">
					<strong>". $person['email']. "</strong></p>
				<p class=\"level-item has-text-centered\">
					<a href=\"http://pixy.local/ssh/view/addedit.php\"><ion-icon name=\"information-circle\"></ion-icon></a>
					<a href=><ion-icon name=\"trash\"></ion-icon></a>
				</p>
			</nav>";}
			?>


				<div class="field is-grouped">
					<div class="control">
						<br>
						<a href="http://pixy.local/ssh/view/addedit.php" class="button is-danger is-rounded">Add a new one</a>
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
