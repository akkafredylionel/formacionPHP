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
                     $user = unserialize(stripslashes($_GET["user"]));

                     echo '<form action="" method="post">'.
                                 "<tr>".
                                 '<td>   <input type="number"   name="id"          value="' .$user->getId().       '" placeholder="'.$user->getId().       '">  </td>'.
                                 '<td>   <input type="text"     name="nombre"      value="' .$user->getNombre().   '" placeholder="'.$user->getNombre().   '">  </td>'.
                                 '<td>   <input type="text"     name="email"       value="' .$user->getEmail().    '" placeholder="'.$user->getEmail().    '">  </td>'.
                                 '<td>   <input type="text"     name="password"    value="' .$user->getPassword(). '" placeholder="'.$user->getPassword(). '">  </td>'.
                                 '<td>   <input type="text"     name="direccion"   value="' .$user->getDireccion().'" placeholder="'.$user->getDireccion().'">  </td>'.
                                 '<td>   <input type="text"     name="cp"          value="' .$user->getCp().       '" placeholder="'.$user->getCp().       '">  </td>'.
                                 '<td>   <input type="text"     name="telefono"    value="' .$user->getTelefono(). '" placeholder="'.$user->getTelefono(). '">  </td>'.
                                 '<td>   <input type="text"     name="dni"         value="' .$user->getDni().      '" placeholder="'.$user->getDni().      '">  </td>'.
                                        '<input type="hidden"   name="accion"      value="editar">'.
                                 "<td>"
                                         .'<input type="submit" value="APLICAR">'.    
                                 "</td>
                                 </tr>".
                           "</form>";

                ?>

            </tbody>
            
        </table>

    </body>
</html>
