<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$consulta = "NOMBRE: " . $nombre . " \r\n";
$consulta .= "MAIL: " . $mail . " \r\n";
$consulta .= "TELEFONO: " . $telefono . " \r\n";
$consulta .= "ASUNTO: " . $asunto . " \r\n";
$consulta .= "MENSAJE: " . $_POST['consulta'] . " \r\n";

$para = 'info@veterinariadelsur.com.ar';
$asunto = 'Consulta enviada desde la Web';

mail($para, $asunto, utf8_decode($consulta), $header);

header("location:contacto-send.html");

?>