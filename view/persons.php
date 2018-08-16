<?php include_once 'headerin.php';
include '../model/connection.php';
include '../model/showpersons.php';
?>

<html>
<body>
<style>
    .container{
        max-width: 600px;
    }
</style>


<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>Your Secret Santa players</strong></p>
			<br>

			<!--Paragraful de mai jos e constant adaugat cand apare un user nou, numarul se itereaza si scade automat.  -->

			<?php $index=0;
            foreach($database_persons as $person){
				echo "
                <div class=\"columns\">
                <div class=\"column is-one-third\">
				<p><strong>
		        " . $index++ . "." . $person['first_name'] . " " . $person['last_name'] ."</strong></p>
		        </div>
				
				<div class=\"column is-one-third\">
				<p><strong>". $person['email']. "</strong></p>
				</div>
				
				<div class=\"column is-pulled-right has-text-centered \">
				<p>
					<a href=\"http://pixy.local/ssh/view/addedit.php\"><ion-icon name=\"information-circle\"></ion-icon></a>
					<a href=\"http://pixy.local/ssh/model/delete.php?email=\"" .$person['email']. "><ion-icon name=\"trash\"></ion-icon></a>
				</p>
				</div></div>";
			}
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
