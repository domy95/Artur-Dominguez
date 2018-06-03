<?php
	
	include("PhpObjs/Utils.php");

	function goIndex() {
		header('Location: index.php');
	}

	$per = "info@datebion.com, domy95.adg@gmail.com";
	$assumpte = $_POST['subject'];
	$missatge = "Nom: ".$_POST['fname']."\n\rCognom: ".$_POST['lname']."\n\n".$_POST['message'];
	$capcalera = "From: ".$_POST['email']."\r\n"."Reply-To: ".$_POST['email']."\r\n"."X-Mailer: PHP/".phpversion();

	mail($per, $assumpte, $missatge, $capcalera);

	Utils::setHaRedireccionat(false);

	goIndex();

?>