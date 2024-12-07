<?php 
    interface GestionUsuario{
        public function agregar(Usuario $usuario):bool;
        public function modificar(Usuario $usuario):bool;
        public function eliminar(int $id):bool;
        public function obtener(int $id);
        public function obtenerTodo();
    }
?>