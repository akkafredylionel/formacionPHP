<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../auth/Autenticacion.php");
    require_once("../web/Web.php");
    require_once("../constant/Constant.php");

    $cuenta = array("email" => $_GET['email'], "password" => $_GET['password']);

    $usuarios = (new GestionUsuarioImpl())->obtenerTodo();

    $autenticacion = new Autenticacion();
    
    if($autenticacion->autenticar($cuenta)){
        Web::redireccionar(Constant::$VISTA_LISTAR_USUARIOS , ["users" => $usuarios]); 
    }
    Web::redireccionar(Constant::$VISTA_INDEX, ["message" => Constant::$MESSAGE_ERROR_LOGIN]);
?>