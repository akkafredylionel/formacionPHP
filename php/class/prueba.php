<?php

    require_once("GestionUsuarioImpl.php");

    $gestiosUsuario = new GestionUsuarioImpl();

    foreach($gestiosUsuario->mostrarTodo() as $usuario){
        echo $usuario->toString();
    }




?>