<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio mail</title>
        <link rel="stylesheet" href="../assets/css/agregarUsuarios-view.css">
    </head>

    <body>

        <form action="" method="post">
             <tr>
                 <td>   <input type="number"   name="id"        placeholder="id">  </td>
                 <td>   <input type="text"     name="nombre"    placeholder="nombre">  </td>
                 <td>   <input type="text"     name="email"     placeholder="email">  </td>
                 <td>   <input type="text"     name="password"  placeholder="password">  </td>
                 <td>   <input type="text"     name="direccion" placeholder="direccion">  </td>
                 <td>   <input type="text"     name="cp"        placeholder="cp" >  </td>
                 <td>   <input type="text"     name="telefono"  placeholder="telefono">  </td>
                 <td>   <input type="text"     name="dni"       placeholder="dni">  </td>
                        <input type="hidden"   name="accion"    value="agregar">   
                 <td>
                       <input type="submit" value="APLICAR">    
                 </td>
             </tr>
        </form>

    </body>

</html>