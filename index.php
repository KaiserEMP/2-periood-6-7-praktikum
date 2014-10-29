<?php require('validation.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>praktikum 2.5</title>
	<style type="text/css">
	.form-notice {
		color: green;
	}
	.form-error {
		color: red;
	}
	</style>
</head>
<body>

<form action="index.php" method="post">
		
		<?php
			 if ($isSubmitted) {
			echo $usernameMessage;
			}
			
		?>
		Kasutaja nimi: <input type="text" name="username"></input>

		<div class= "form_message">

      <?php  if ($isSubmitted) {
      	echo $ageMessage;
      	}
      	?>
      
      Vanus: <input id="age" type="text" name="age">

   </div>


     <div class= "form_message">
      <?php  if ($isSubmitted) {
      	echo $foodMessage;
      	}
      	?>
              
      Food:<input id="food" type="text" name="food">
   </div>
   

      <div class= "form_message">
      <?php  if ($isSubmitted) {
      	echo $emailMessage;
      	}
      	?>
      
      E-mail:<input id="email" type="text" name="email">
   </div>

		<input type="submit" value="Saada" name="submit" ></input>
</form>

</body>
</html>