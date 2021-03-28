<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Form</title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="name" placeholder="Name" id="">
        <br>
        <br>
        
        <input type="email" placeholder="Email" name="email" id="">
        <br>
        <br>

        <input type="text" placeholder="Número de teléfono" name="numero" id="">
        <br>
        <br>
        
        <input type="text" name="asunto" placeholder="Asunto" id="">
        <br>
        <br>
        
        <textarea placeholder="Mensaje" name="message"></textarea>
        <br>
        <br>
        
        <input type="submit" value="Enviar">
    </form>

    <?php

        include('./template-email.php')

    ?>


</body>
</html>