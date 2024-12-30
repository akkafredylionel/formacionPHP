<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de Datos</title>
        <link rel="stylesheet" href="../css/listarUsuarios-view.css">
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
                    <th>Mesa</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>

                <?php $users = unserialize(stripslashes($_GET["users"])); ?> 

                <?php 
                    foreach($users as $user){
                        $linkEliminar = "../../class/control/Crud-control.php?id=".$user["id"]."&accion=eliminar";
                        $linkEditar = "../../class/control/Crud-control.php?id=".$user["id"]."&accion=editar";
                        $linkAgregar = "agregarUsuario-view.php";
                ?>
                     <tr>
                            <td>   <?php echo $user["id"]        ?>  </td>
                            <td>   <?php echo $user["nombre"]    ?>  </td>
                            <td>   <?php echo $user["email"]     ?>  </td>
                            <td>   <?php echo $user["password"]  ?>  </td>
                            <td>   <?php echo $user["direccion"] ?>  </td>
                            <td>   <?php echo $user["cp"]        ?>  </td>
                            <td>   <?php echo $user["telefono"]  ?>  </td>
                            <td>   <?php echo $user["dni"]       ?>  </td>
                            <td>   <?php echo $user["mesa"]      ?>  </td>
                        
                            <td>
                               <?php echo "<a href = $linkEditar   >   <button> Editar     </button> </a>"   ?>
                               <?php echo "<a href = $linkEliminar >   <button> Eliminar   </button> </a>"   ?>    
                            </td>
                     </tr>

                <?php } ?>
                            <?php echo "<a href =  $linkAgregar >  <button> AGREGAR </button> </a>" ?>
           
            </tbody>

        </table>

    </body>
    
</html>
