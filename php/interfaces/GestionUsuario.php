<?php 
    interface GestionUsuario{
        public function agregar(Usuario $usuario);
        public function modificar(int $id , Usuario $usuario);
        public function eliminar(int $id);
    }
?>