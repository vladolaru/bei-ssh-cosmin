<?php

require_once "class-fields.php";
class Form {

	protected $form;

	function openForm(){
		$this->form= " <form action=\"/login.php\" method=\"get\"> ";

	}

	function closeForm(){
		echo "<br></form>";
	}

	function addFields($name){

		makeField($name);
	}
	function createForm(){

	}

	function showForm(){
		$this->form=$;
		echo $this->form;
	}

}