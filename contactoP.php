<?php

$destiny = 'caceres.vc95@gmail.com';

if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['message']) ||
   empty($_POST['cake']))
{
	echo '<script>
			$(document).ready(function(){
				swal("Ops...","Todos los Campos son Obligatorios","warning");
			});
			</script>';
}else{

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$cake = $_POST['cake'];

	$email_subject = "$name se contacto contigo y le interesa el postre $cake";


	require_once 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		$mail->IsHTML(true);
		
		$mail->Username = 'mvc.corpca@gmail.com';
		$mail->Password = 'creacion202017*';
		
		$mail->setFrom('mvc.corpca@gmail.com', 'Los Mejores Postres');
		$mail->addAddress($destiny, $name);
		
		$mail->Subject = $email_subject;
		$mail->IsHTML(true);

		$mail->Body    = "<!DOCTYPE html>
							<html>
							<body>
								<h1>Has recibido un nuevo mensaje de una persona interesada en tus postres</h1>
								<br>
								<h3>Nombre: $name</h3>
								<h3>Telefono: $phone</h3>
								<h3>Correo: $email_address</h3>
								<br>
								<h2>El cliente indica estar interesado en $cake... Y te ha dejado el siguente mensaje: $message</h2>
							</body>
							</html>";

		$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
			)
		);
		
		if($mail->send()){

			echo'
		<script>
			$(document).ready(function(){
				swal("Excelente '.utf8_encode($name).'...", "Tu mensaje fue enviado con exito. \n Pronto se pondran en contacto contigo!", "success")
			});
		</script>';

		}else{

		echo'
			<script>
				$(document).ready(function(){
					swal("Oh no.. '.utf8_encode($name).'...","Hubo un error al enviar el mensaje, por favor intentalo de nuevo", "error");
				});
			</script>';

		}

	}
		

?>


