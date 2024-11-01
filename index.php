<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO SESIÓN</title>
        <link rel="stylesheet" href="assets/css/index.css">
    </head>

    <body>  
        <form action="php/checkLogin.php" method="get">
            <input type="text" name="email" placeholder="Usuario" required>
            <input type="text" name="password" placeholder="Contraseña" required>
            <input type="submit" value="ENTRAR">
            <?php if(isset($_GET['error'])){ echo "<p>".$_GET['error']."</p>";}?>
        </form>
    </body>

</html>