<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../Autenticacion.php");
    require_once("../Web.php");
    require_once("Constant.php");

    $id = $_GET["id"];
    $gestionUsuarioImpl = new GestionUsuarioImpl();
    $usuario = $gestionUsuarioImpl->obtener($id);

    Web::redirect(Constant::$VISTA_EDITAR_USUARIO , ["user" =>$usuario]); 
?>


     