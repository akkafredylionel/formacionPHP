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
        require_once("..\php\class\Usuario.php");
        $users = unserialize(stripslashes($_GET["users"]));
        foreach($users as $user){

            $linkEliminar = "...............?id=".$user->getId()."&accion=eliminar";
            $linkEditar = "-----------------?id=".$user->getId()."&accion=editar";
            $linkAgregar = "agregarUsuario-view.php";

            echo "<tr>
                    <td>"   .$user->getId().        "</td>
                    <td>"   .$user->getNombre().    "</td>
                    <td>"   .$user->getEmail().     "</td>
                    <td>"   .$user->getPassword().  "</td>
                    <td>"   .$user->getDireccion(). "</td>
                    <td>"   .$user->getCp().        "</td>
                    <td>"   .$user->getTelefono().  "</td>
                    <td>"   .$user->getDni().       "</td>
                    <td>"
                            ."<a href = ".$linkEditar."> <button> Editar   </button> </a>"
                            ."<a href = ".$linkEliminar."> <button> Eliminar </button> </a>".        
                    "</td>
                 </tr>";
               
        }
            echo "<a href = ".$linkAgregar."> <button> AGREGAR </button> </a>";    
      ?>
        
    </tbody>
</table>

</body>
</html>
