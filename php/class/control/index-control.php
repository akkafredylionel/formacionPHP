<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../Autenticacion.php");
    require_once("../Web.php");
    require_once("Ruta.php");

    $autenticacion = new Autenticacion();
    $usuarios = (new GestionUsuarioImpl())->obtenerTodo();
    $account = array("email"=>$_GET['email'],"password"=>$_GET['password']);
    $autenticacion->isAccountExist($account);
 

    if($autenticacion->isAccountExist($account)){
        Web::redirect(Ruta::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
    }
?>