<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <link rel="stylesheet" href="../assets/css/listarUsuarios-view.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Dirección</th>
            <th>CP</th>
            <th>Teléfono</th>
            <th>DNI</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

     <?php
        $users = unserialize(stripslashes($_GET["users"]));
        foreach($users as $user){
            echo "<tr>
                    <td>"   .$user['id'].        "</td>
                    <td>"   .$user['nombre'].    "</td>
                    <td>"   .$user['email'].      "</td>
                    <td>"   .$user['password'].  "</td>
                    <td>"   .$user['direccion']. "</td>
                    <td>"   .$user['cp'].        "</td>
                    <td>"   .$user['telefono'].  "</td>
                    <td>"   .$user['dni'].       "</td>
                    <td>
                            <button>Editar</button>
                            <button>Eliminar</button>
                    </td>
                 </tr>";
        }
      ?>
        
    </tbody>
</table>

</body>
</html>
