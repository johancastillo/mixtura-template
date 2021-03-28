<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
    if(isset($_POST['name'])){
        
        $destino = "jcjohan2707@gmail.com";
        
        $nombre = $_POST["name"];
        
        
        $email = $_POST["email"];
        
        $numero = $_POST["numero"];
        
        $mensaje = $_POST["message"];
        
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $message;
        
        mail($destino, "Contacto", $contenido);

        header("Location: index.php");
    }
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>