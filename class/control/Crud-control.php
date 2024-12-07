<?php
    
    require_once("../GestionUsuarioImpl.php");
    require_once("../auth/Autenticacion.php");
    require_once("../web/Web.php");
    require_once("../constant/Constant.php");
    
    $accion = $_REQUEST["accion"];
    
    
    if($accion == Constant::$EDITAR ){
        $id = $_GET["id"];
        $gestionUsuarioImpl = new GestionUsuarioImpl();
        $usuario = $gestionUsuarioImpl->obtener($id);
        Web::redireccionar(Constant::$VISTA_EDITAR_USUARIO , ["user" =>$usuario]); 
    }
    
    if($accion ==  Constant::$ELIMINAR ){
        $id = $_GET["id"];
        $gestionUsuarioImpl = new GestionUsuarioImpl();
        $gestionUsuarioImpl->eliminar($id);
        $usuarios = $gestionUsuarioImpl->obtenerTodo();
        Web::redireccionar(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
    }
    
    if($accion ==  Constant::$AGREGAR ){

        $usuario = new Usuario();
        $usuario->setNombre($_POST["nombre"]);
        $usuario->setEmail($_POST["email"]);
        $usuario->setPassword($_POST["password"]);
        $usuario->setDireccion($_POST["direccion"]);
        $usuario->setCp($_POST["cp"]);
        $usuario->setTelefono($_POST["telefono"]);
        $usuario->setDni($_POST["dni"]);
        $usuario->setMesa($_POST["mesa"]);
        
        $gestionUsuarioImpl = new GestionUsuarioImpl();
        $usuarioAgregado = $gestionUsuarioImpl->agregar($usuario);
        $usuarios = $gestionUsuarioImpl->obtenerTodo();
        Web::redireccionar(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
    }

    if($accion == Constant::$LISTAR_DESPUES_EDITAR ){

        $usuario = new Usuario();
        $usuario->setId($_POST["id" ]);
        $usuario->setNombre($_POST["nombre"]);
        $usuario->setEmail($_POST["email"]);
        $usuario->setPassword($_POST["password"]);
        $usuario->setDireccion($_POST["direccion"]);
        $usuario->setCp($_POST["cp"]);
        $usuario->setTelefono($_POST["telefono"]);
        $usuario->setDni($_POST["dni"]);
        $usuario->setMesa($_POST["mesa"]);
        
        $gestionUsuarioImpl = new GestionUsuarioImpl();
        $usuarioModificado= $gestionUsuarioImpl->modificar($usuario);
        $usuarios = $gestionUsuarioImpl->obtenerTodo();
        Web::redireccionar(Constant::$VISTA_LISTAR_USUARIOS , ["users" =>$usuarios]); 
    }

?>