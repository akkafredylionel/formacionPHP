<?php 

    require 'class/GestionUsuarioImpl.php';

    $usuario1 = (new Usuario())->crearUsuarioFullData("Juan Pérez", "juan.perez@example.com","juan.perez","Calle Falsa 123","28001","612345678","12345678A","Mesa1");

    $usuario2 = (new Usuario())->crearUsuario("ANTONIO","Mesa3");
    $usuario2->setEmail("Antonio@gmail.com");
    $usuario2->setPassword("Antonio4459");
    $usuario2->setId(6);
  
  

    $GestionUsuario = new GestionUsuarioImpl();

    print_r($GestionUsuario->obtenerTodo()) ;


?>