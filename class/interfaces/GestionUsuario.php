<?php 
    interface GestionUsuario{
        public function agregar(Usuario $usuario):bool;
        public function modificar(int $id , Usuario $usuario):bool;
        public function eliminar(int $id):bool;
        public function obtener(int $id):Usuario;
        public function obtenerTodo():array;
    }
?>