<?php 

    require_once("../interfaces/GestionUsuario.php");
    require_once("../class/Usuario.php");

    class GestionUsuarioImpl implements GestionUsuario{

        private  $usuarios;


        public function __construct(){

            $this->usuarios = array();

            array_push($this->usuarios ,new Usuario(1,"Juan Pérez", "juan.perez@example.com","juan.perez","Calle Falsa 123","28001","612345678","12345678A"));

            array_push($this->usuarios,new Usuario(2, "María López", "maria.lopez@example.com", "maria.lopez","Avenida Siempre Viva 456","28002","623456789","23456789B"));

            array_push($this->usuarios,new Usuario(3,  "Carlos García", "carlos.garcia@example.com", "carlos.garcia","Calle Ocho 789","28003","634567890","34567890C"));

            array_push($this->usuarios,new Usuario(4, "Ana Martínez",   "ana.martinez@example.com",   "carlos.garcia",  "Paseo de la Reforma 321","28004","645678901","45678901D"));

            array_push($this->usuarios,new Usuario(5, "Luis Rodríguez","luis.rodriguez@example.com","luis.rodriguez","Calle del Río 159","28005","656789012","56789012E"));
        }

        public function agregar(Usuario $usuario){
                if(!existeUsuario($usuario)){
                    throw new Exception("El usuario ya existe");
                }
                array_push($this->usuarios,$usuario);
        }
        public function modificar(int $id , Usuario $usuario):bool{
            $index = 0;
            foreach($this->usuarios as $user){
                if($user->getId() == $id){
                    $this->usuarios[$index] = $usuario;
                    return true;
                }
                $index++;
            }
            return false;
        }

        public function eliminar(int $id):bool{

            foreach($this->usuarios as $usuario){
                if($usuario->getId() == $id){
                    $usuario;
                }
            }

        }

        public function mostrar(int $id):Usuario{
            $index = 0;
            foreach($this->usuarios as $usuario){
                if($usuario->getId() == $id){
                    return $this->usuarios[$index];
                }
                $index++;
            }
            return null;
        }

        public function mostrarTodo():array{
            return $this->usuarios;
        }

        private function existeUsuario(Usuario $usuario):bool{
            foreach($this->usuarios as $user){
                if($user->getEmail() == $usuario->getEmail() || $user->getDni() == $usuario->getDni()|| $user->getTelefono() == $usuario->getTelefono()){
                    return true;
                }
            }
            return false;
        }

    }


?>