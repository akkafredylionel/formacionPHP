<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EDITAR USUARIO</title>
        <link rel="stylesheet" href="../css/agregarUsuarios-view.css">
    </head>
    <body>
       
        <form action="../../class/control/Crud-control.php" method="post">

                <?php $user =  unserialize(stripslashes($_GET["user"]))?> 
                <tr>
                    <td>   <input type="text"     readonly name="id"   value=<?php echo $user["id"]       ?>  placeholder= <?php  echo $user['id']       ?>  </td>
                    <td>   <input type="text"     name="nombre"        value=<?php echo $user["nombre"]   ?>  placeholder= <?php  echo $user["nombre"]   ?>  </td>
                    <td>   <input type="text"     name="email"         value=<?php echo $user["email"]    ?>  placeholder= <?php  echo $user["email"]    ?>  </td>
                    <td>   <input type="text"     name="password"      value=<?php echo $user["password"] ?>  placeholder= <?php  echo $user["password"] ?>  </td>
                    <td>   <input type="text"     name="direccion"     value=<?php echo $user["direccion"]?>  placeholder= <?php  echo $user["direccion"]?>  </td>
                    <td>   <input type="text"     name="cp"            value=<?php echo $user["cp"]       ?>  placeholder= <?php  echo $user["cp"]       ?>  </td>
                    <td>   <input type="text"     name="telefono"      value=<?php echo $user["telefono"] ?>  placeholder= <?php  echo $user["telefono"] ?>  </td>
                    <td>   <input type="text"     name="dni"           value=<?php echo $user["dni"]      ?>  placeholder= <?php  echo $user["dni"]      ?>  </td>
                    <td>   <input type="text"     name="mesa"          value=<?php echo $user["mesa"]     ?>  placeholder= <?php  echo $user["mesa"]     ?>  </td>
                    <td>   <input type="hidden"   name="accion"        value="listar_despues_editar">                                                        </td>    
                    <td>   <input type="submit"                        value="APLICAR">                                                                      </td>              
                </tr>

        </form>
        
    </body>
</html>
