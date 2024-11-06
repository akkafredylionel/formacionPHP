<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../Autenticacion.php");
    require_once("../Web.php");
    require_once("Constant.php");

    $id = $_GET["id"];
    $gestionUsuarioImpl = new GestionUsuarioImpl();
    $gestionUsuarioImpl->eliminar($id);
    $usuarios = $gestionUsuarioImpl->obtenerTodo();

    Web::redirect(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 


?>