<?php

class Fields {

	protected $name;

	function makeField( $name ) {
		$text = ucfirst( $name );
		echo "<label for='{$name}'>{$text}</label>
          <input type='text' name='{$name}' />";
	}
}

?>