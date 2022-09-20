<?php

require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
				'email' => 'jibanez@apolotec.cl', // Your Email Address
				'name' => 'juan Carlos Castro Valdebenito' // Your Name
			);

			// Form Processing Messages
$mensaje_success = 'Hola! <strong>Su Mensaje</strong> ha sido enviado con exito! pronto nos pondremos en contacto con usted.';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = ''; // Your reCaptcha Secret

$mail = new PHPMailer();
// If you intend you use SMTP, add your SMTP Code after this Line




if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['correo'] != '' ) {

		$nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
		$correo = isset( $_POST['correo'] ) ? $_POST['correo'] : '';
		$mensaje = isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
		$asunto = isset( $_POST['asunto'] ) ? $_POST['asunto'] : '';
		$telefono = isset( $_POST['telefono'] ) ? $_POST['telefono'] : '';

		$asunto = isset($asunto) ? $asunto : 'Nuevo mensaje: ';

		if( $botcheck == '' ) {

			$mail->SetFrom( $correo );
			$mail->AddReplyTo( $correo , $nombre );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] );
			}
			$mail->Subject = $subject;

			$nombre = isset($nombre) ? "Nombre: $nombre<br><br>" : '';
			$correo = isset($correo) ? "Correo: $correo<br><br>" : '';
			$telefono = isset($telefono) ? "Telefono: $telefono<br><br>" : '';
			$asunto = isset($asunto) ? "asunto: $asunto<br><br>" : '';
			$mensaje = isset($mensaje) ? "Mensaje: $mensaje<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$nombre $correo $telefono $asunto $mensaje $referrer";


			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();
			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $mensaje_success . '" }';
			else:
				echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detected</strong>.! Clean yourself Botster.!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "Please <strong>Fill up</strong> all the Fields and Try Again." }';
	}
} else {
	echo '{ "alert": "error", "message": "An <strong>unexpected error</strong> occured. Please Try Again later." }';
}

?>