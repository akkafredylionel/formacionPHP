<?php 

    require 'class/GestionUsuarioImpl.php';

    $usuario1 = (new Usuario())->crearUsuarioFullData("Juan Pérez", "juan.perez@example.com","juan.perez","Calle Falsa 123","28001","612345678","12345678A","Mesa1");

    $usuario2 = (new Usuario())->crearUsuario("Juana Pérez","Mesa2");
  

    $GestionUsuario = new GestionUsuarioImpl();

   print_r($GestionUsuario->agregar($usuario1));

?>