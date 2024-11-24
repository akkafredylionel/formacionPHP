<?php

require_once("../GestionUsuarioImpl.php");
require_once("../Autenticacion.php");
require_once("../Web.php");
require_once("Constant.php");

$accion = $_GET["accion"];


if($accion == Constant::$EDITAR ){
    $id = $_GET["id"];
    $gestionUsuarioImpl = new GestionUsuarioImpl();
    $usuario = $gestionUsuarioImpl->obtener($id);
    Web::redirect(Constant::$VISTA_EDITAR_USUARIO , ["user" =>$usuario]); 
}

if($accion ==  Constant::$ELIMINAR ){
    $id = $_GET["id"];
    $gestionUsuarioImpl = new GestionUsuarioImpl();
    $gestionUsuarioImpl->eliminar($id);
    $usuarios = $gestionUsuarioImpl->obtenerTodo();
    Web::redirect(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
}

if($accion ==  Constant::$AGREGAR ){
    $id = $_POST["id" ];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $direccion = $_POST["direccion"];
    $cp = $_POST["cp"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    
    $gestionUsuarioImpl = new GestionUsuarioImpl();
    $usuarios = $gestionUsuarioImpl->obtenerTodo();
    Web::redirect(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
}

?>