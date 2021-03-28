<?php

    // Correo al que se enviará el mensaje
    $detinatario = "jcjohan2707@gmail.com";

    $name = $_POST['name'];
    $asunto = $_POST['title'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $header = "Nuevo pedido de Mixtura";

    $messageToSend = $message . "/nAtentamemnte: " . $name;

    mail($detinatario, $asunto, $messageToSend, $header);

    echo '<script>alert("Mensaje enviado correctamente")</script>';
    echo '<script>setTimeout(() => location.href = "/", 1000)</script>';

?>