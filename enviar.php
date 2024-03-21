<?php
// Recibir datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['text'];

// Configurar el correo electrónico
$destinatario = 'badineayub@gmail.com'; // Reemplaza con tu dirección de correo electrónico
$asunto = 'Message form my web';

// Construir el cuerpo del correo electrónico
$contenido = "Name: $nombre\n";
$contenido .= "Email: $email\n\n";
$contenido .= "text:\n$mensaje\n";

// Enviar el correo electrónico
mail($destinatario, $asunto, $contenido);

// Redirigir de vuelta al formulario
header('Location: index.html');
?>
