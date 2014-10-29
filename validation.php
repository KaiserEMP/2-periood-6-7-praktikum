<?php 

//kontrollib kas legele satuti GET
// või POST päringu abil

	
	$isSubmitted = isset($_POST["submit"]);
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$age = $_POST["age"];
		$food = $_POST['food'];
		$email = $_POST['email'];

	}
	$min= 3;
	$max= 20;


	if (!isset($username) || $username == "") {
		$usernameMessage= '<div class= "form_message form-error"> Palun sisesta kasutajanimi</div>';
		
	} elseif (strlen($username) < $min) {
		$usernameMessage= '<div class= "form_message form-error"> Kasutajanimi peab olema ' . $min . ' tähemärki pikk</div>';

	}  elseif (strlen($username) > $max) {
		$usernameMessage= '<div class= "form_message form-error"> Kasutajanimi peab olema alla ' . $max . ' tähemärgi pikk</div>';
	}
	else {
		$usernameMessage='<div class= "form_message form-notice"> Kasutajanimi salvestatud </div>';

	}


	// nummer
		if (isset($age) and !is_numeric($age)) {
		$ageMessage = '<div class= "form_message form-error"> Vanus peab olema numbriline väärtus </div>';
	} else {
		$ageMessage = '<div class= "form_message form-notice"> Vanus käis kah </div>';
	}


	// foodos
			$foods = array("tomat", "kaalikas", "kartul");
		if (isset ($food) and in_array(strtolower($food), $foods))
		{
		$foodMessage= '<div class= "form_message form-notice"> Söök on olemas </div>';
	} else {
		
		$foodMessage= '<div class= "form_message form-error"> No food sry</div>';
	}


	// email
		if (isset($email) and preg_match("/@/", $email))
		{
		$emailMessage= '<div class= "form_message form-notice"> E-mail on saadaval </div>';
	} else {
		
		$emailMessage= '<div class= "form_message form-error"> E-mail on kasutusel </div>';
	}
 ?>