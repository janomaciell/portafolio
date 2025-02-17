<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $to = "janomaciel1@gmail.com"; // Tu correo de destino
    $subject = $asunto;
    $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email"; // El correo del remitente

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado con éxito.";
    } else {
        echo "Error al enviar el email.";
    }
}
?>