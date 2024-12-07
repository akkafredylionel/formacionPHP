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
                     $user = unserialize(stripslashes($_GET["user"]));

                     echo '<form action="../../class/control/Crud-control.php" method="post">'.
                                 "<tr>".
                                 '<td>   <input type="text"     name="nombre"      value="' .$user["nombre"].   '" placeholder="'.$user["nombre"].   '">  </td>'.
                                 '<td>   <input type="text"     name="email"       value="' .$user["email"].    '" placeholder="'.$user["email"].    '">  </td>'.
                                 '<td>   <input type="text"     name="password"    value="' .$user["password"]. '" placeholder="'.$user["password"]. '">  </td>'.
                                 '<td>   <input type="text"     name="direccion"   value="' .$user["direccion"].'" placeholder="'.$user["direccion"].'">  </td>'.
                                 '<td>   <input type="text"     name="cp"          value="' .$user["cp"].       '" placeholder="'.$user["cp"].       '">  </td>'.
                                 '<td>   <input type="text"     name="telefono"    value="' .$user["telefono"]. '" placeholder="'.$user["telefono"]. '">  </td>'.
                                 '<td>   <input type="text"     name="dni"         value="' .$user["dni"].      '" placeholder="'.$user["dni"].      '">  </td>'.
                                 '<td>   <input type="text"     name="mesa"        value="' .$user["mesa"].     '" placeholder="'.$user["mesa"].     '">  </td>'.
                                        '<input type="hidden"   name="accion"      value="listar_despues_editar">'.
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
