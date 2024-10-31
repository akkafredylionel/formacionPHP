<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio mail</title>
        <link rel="stylesheet" href="../assets/css/agregarUsuarios-view.css">
    </head>

    <body>

        <form action="mostrarCorreo.php" method="post">
            <select name="destinatario">
                <?php
                    $users = unserialize(stripslashes($_GET["users"]));
                    foreach($users as $user)
                        echo "<option value=".$user['mail'].">".$user['mail']."</option>";
                ?>        
            </select>
            
            <input type="text" name="remitente" id ="remitente" value=<?php echo $_GET["user"]?> readonly>
            <input type="text" name="asunto" placeholder="Asunto" required>
            <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje..." required></textarea>
            <input type="submit" value="ENVIAR">
        </form>

    </body>

</html>