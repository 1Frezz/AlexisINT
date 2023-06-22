<?php 
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['dni'];


	if(mail('reservas@alexis-evt.tur.ar', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>