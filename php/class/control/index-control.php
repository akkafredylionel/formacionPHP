<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../Autenticacion.php");
    require_once("../Web.php");
    require_once("Constant.php");

    $account = array("email" => $_GET['email'], "password" => $_GET['password']);
    $usuarios = (new GestionUsuarioImpl())->obtenerTodo();

    $autenticacion = new Autenticacion();
    
    if($autenticacion->isAccountExist($account)){
        Web::redirect(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
    }
    Web::redirect(Constant::$VISTA_INDEX, ["message" => Constant::$MESSAGE_ERROR_LOGIN]);
?>