<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];
	$tel = $_POST["tel"];
	$ciudad = $_POST["ciudad"];
    $destino = "ventas@ajonjolimexico.com.mx";
		$desde= "From: Contacto Web Ajonjolí México";
		$asunto = "Cotizacion";
	$contenido = "Hola,\n\nRecibimos un correo para que contacte a la siguiente persona para cotizacion:\n\nNombre: $nombre\n\nApellido : $apellido\n\nCorreo: $email\nTelefono: $tel,\n\nCiudad: $ciudad \n\nMensaje: $mensaje";

   		
    mail($destino,$asunto,$contenido,$desde);
echo "Responderemos a la brevedad su mensaje"
?>
