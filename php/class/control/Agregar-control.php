<?php

    require_once("../GestionUsuarioImpl.php");
    require_once("../Autenticacion.php");
    require_once("../Web.php");
    require_once("Constant.php");

    define("MODIFICAR", "modificar");
    define("AGREGAR", "agregar");
    $accion = $_POST["accion"];

    $id = $_POST["id" ];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $direccion = $_POST["direccion"];
    $cp = $_POST["cp"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    
    $gestionUsuarioImpl = new GestionUsuarioImpl();
 
    $usuario = new Usuario($id,$nombre,$email,$password,$direccion,$cp,$telefono,$dni);
 
    if($accion == MODIFICAR ){
        $gestionUsuarioImpl->modificar($id,$usuario);
    }

    if($accion == AGREGAR ){
        $gestionUsuarioImpl->agregar($usuario);
    }
    
    $usuarios = $gestionUsuarioImpl->obtenerTodo();
     
    Web::redirect(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
?>


     