<?php 

  
    class GestionUsuarioImpl implements GestionUsuario{

        private ArrayObject $usuarios;


        public function __construct(){
            $this->usuarios = array(
                array("id" => 1, "nombre" => "Juan Pérez",    "email" => "juan.perez@example.com",    "password" => "juan.perez",     "direccion"  => "Calle Falsa 123","cp"          => "28001","telefono" => "612345678","dni" => "12345678A"),
                array("id" => 2, "nombre" => "María López",   "email" => "maria.lopez@example.com",   "password" => "maria.lopez",    "direccion"  => "Avenida Siempre Viva 456","cp" => "28002","telefono" => "623456789","dni" => "23456789B"),
                array("id" => 3, "nombre" => "Carlos García", "email" => "carlos.garcia@example.com", "password" => "carlos.garcia",  "direccion"  => "Calle Ocho 789","cp"           => "28003","telefono" => "634567890","dni" => "34567890C"),
                array("id" => 4, "nombre" => "Ana Martínez",  "email" => "ana.martinez@example.com",  "password" => "carlos.garcia",  "direccion"  => "Paseo de la Reforma 321","cp"  => "28004","telefono" => "645678901","dni" => "45678901D"),
                array("id" => 5, "nombre" => "Luis Rodríguez","email" => "luis.rodriguez@example.com","password" => "luis.rodriguez",  "direccion" => "Calle del Río 159","cp"        => "28005","telefono" => "656789012","dni" => "56789012E")
            );
        }
        public function agregar(Usuario $usuario){}
        public function modificar(int $id , Usuario $usuario){}
        public function eliminar(int $id){}

    }


?>