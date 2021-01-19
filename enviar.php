<?php
include ("class.phpmailer.php");

$correo = $_POST['email'];
$nombre = $_POST['name'];
$apellido = $_POST['subject'];
$comentario = $_POST['message'];




      $mail = new PHPMailer();

      $mail->Host = "localhost";

      $mail->From = "zdeportiva@zdeportiva.com.ar";

      $mail->FromName = "$nombre";

      $mail->Subject = "Consulta Web";

      $mail->AddAddress("ab.zonadeportiva@gmail.com");

	
	  
      $body = "Email: $correo"."<br />";
      $body .= "Nombre: $nombre"."<br />";
     
      $body .= "Comentario: $comentario"."<br />";
	  
	 

      $mail->Body = $body;

      $mail->AltBody = "";

	  

      $mail->Send();
	  
	  
	  
	  
		header("Location: index.html");

?>