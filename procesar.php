<?php
$nom = $_POST['nom'];
$mail = $_POST['email'];
$titol = $_POST['titol'];
$observacions = $_POST['observacions'];
$seccio = $_POST['seccio'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nom: " . $nom ." \r\n";
$mensaje .= "E-mail: " . $mail ." \r\n";
$mensaje .= "Titol: " . $titol . " \r\n";
$mensaje .= "Motiu: " . $observacions ." \r\n";
$mensaje .= "Enviat el " . date('d/m/Y', time());

$para = $_POST['seccio'];
$asunto = 'CONSULTA USUARI WEB ERMASSETS';

$url="error.php"; 

mail ($para, $asunto, utf8_decode($mensaje), $header)  or die ($url);

header ( 'Location: thanks.php' );
?>