<?php
    require_once("GestionUsuarioImpl.php");
    require_once("Autenticacion.php");
    require_once("Web.php");

    $array =["key" => array("numero" => 100, "color" => "red")] ;
    $array2 = array("numero" => 100, "color" => "red");
    
    echo Web::redirect("http://localhost:8080/PHP/Prueba.php");
    


?>