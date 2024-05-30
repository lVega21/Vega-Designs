<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configuración del correo
    $to = 'vegadesignsenc@gmail.com'; // Reemplaza esto con tu dirección de correo
    $subject = 'Nuevo mensaje del formulario de contacto';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo 'Mensaje enviado correctamente.';
    } else {
        echo 'Error al enviar el mensaje.';
    }
} else {
    echo 'Método no soportado.';
}
?>