<?php 

    require_once("GestionUsuarioImpl.php");

    class Autenticacion{
    
        private $gestionUsuario;

        function __construct() {
            $this->gestionUsuario  = new GestionUsuarioImpl();
        }

        function isAccountExist($account):bool{
            $email = $account["email"];
            $password = $account["password"];
            $usuarios = $this->gestionUsuario->obtenerTodo();
            $usuarioExist = false;
            foreach($usuarios as $usuario){
                if($usuario->getEmail() == $email  && $usuario->getPassword() == $password){
                    $usuarioExist = true;
                }
            }
            return $usuarioExist;
        }

    }


?>