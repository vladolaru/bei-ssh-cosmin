<?php
/*if ( ! defined( 'SSH_ABSPATH' ) ) {
	die;
}*/

include_once 'headerin.php';
include /*SSH_ABSPATH . */ '../model/connection.php';
include '../model/showhistory.php';

?>

<html>
<body>


<section class="section">
	<div class="container">
		<div class="notification">

			<p class="has-text-black has-text-centered"><strong>Your Secret Santa past rounds</strong></p>
			<br>

			<!--Paragraful de mai jos e constant adaugat cand apare un user nou, numarul se itereaza si scade automat.  -->

			<?php $index=1;
			foreach($database_rounds as $round){
			if($round['user_id']==$_COOKIE['user_id'])
			{
				echo '
                <div class="columns">
                <div class="column is-one-half has-text-centered">
				<p><strong>' .$index++ . '.' . $round['date'] . '</strong></p>
		        </div>
				
				<div class="column is-one-quarter has-text-centered">
				<p><strong>'. $round['participants_number']. '</strong></p>
				</div>
				
				<div class="column is-one-quarter auto">
				<p><strong>'. $round['budget']. '$' .'</strong></p>
				</div>
				</div>';
			}}
			?>

			<div class="field is-grouped">
				<div class="control">
					<br>
					<a href="http://pixy.local/ssh/view/rounds.php" class="button is-danger is-rounded">Start a new round</a>
				</div>
			</div>
		</div>

	</div>
	</div>
</section>


</body>
</html>

<?php include_once 'footer.php'; ?>
