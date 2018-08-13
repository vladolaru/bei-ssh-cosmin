<?php  if (count($errors_fields) > 0){
		foreach ($errors_fields as $error){ ?>
			<p><?php echo $error ?></p>
		<?php } else ?>
	<p><?php  echo "You have successfully registered!" ?></p>
<?php  } ?>