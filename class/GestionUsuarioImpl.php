<?php

require_once("model/Usuario.php");
require_once("interfaces/GestionUsuario.php");
require_once("dataBase/Conexion.php");
class GestionUsuarioImpl implements GestionUsuario{

private  $usuario;
private $DBconexion;


public function agregar(Usuario $usuario):bool{

        $usuarioAniadido = false;

        if(!$this->existeUsuario($usuario)){
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();

            $camposValues = $this->generarCampos($usuario);
    
            $sql = "INSERT INTO usuario (".$camposValues["campos"].") VALUES (".$camposValues["values"].")";
            $stmt = $conexion->prepare($sql);

            $usuario->setId($this->generarClave());
            $stmt->bindParam(":id",$usuario->getId());
    
            if($usuario->getNombre() != null){
                $stmt->bindParam(":nombre",$usuario->getNombre());
            }
            if($usuario->getEmail() != null){
                $stmt->bindParam(":email",$usuario->getEmail());
            }
            if($usuario->getPassword() != null){
                $stmt->bindParam(":password",$usuario->getPassword());
            }
            if($usuario->getDireccion() != null){
                $stmt->bindParam(":direccion",$usuario->getDireccion());
            }
            if($usuario->getCp() != null){
                $stmt->bindParam(":cp",$usuario->getCp());
            }
            if($usuario->getTelefono() != null){
                $stmt->bindParam(":telefono",$usuario->getTelefono());
            }
            if($usuario->getDni() != null){
                $stmt->bindParam(":dni",$usuario->getDni());
            }
            if($usuario->getMesa() != null){
                $stmt->bindParam(":mesa",$usuario->getMesa());
            }
            $stmt->execute();
            $usuarioAniadido = true;
            $this->DBconexion->desconectar();
        }

        return $usuarioAniadido;
           
}
public function modificar(int $id , Usuario $usuario):bool{
 
}

public function eliminar(int $id):bool{
   
}

public function obtener(int $id):Usuario{

}

public function obtenerTodo():array{
  
}

private function existeUsuario(Usuario $usuario):bool{

        $this->DBconexion = new Conexion();
        $conexion = $this->DBconexion->conectar();

        $sql = "SELECT * FROM usuario WHERE email = :email OR dni = :dni OR telefono = :telefono ";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":email",$usuario->getEmail());
        $stmt->bindParam(":dni",$usuario->getDni());
        $stmt->bindParam(":telefono",$usuario->getTelefono());
        $stmt->execute();
        $result = $stmt->fetch();
        $this->DBconexion->desconectar();
        return $result != null;    
}

private function generarClave():int{
    $this->DBconexion = new Conexion();
    $conexion = $this->DBconexion->conectar();
    $sql = "SELECT Max(id) FROM usuario";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();

    $this->DBconexion->desconectar();
    return $result[0]+1;
}

public function generarCampos(Usuario $usuario):Array{

    $campos = "id,";
    $values = ":id,";

    if($usuario->getNombre() != null){
        $campos = $campos."nombre,";
        $values = $values.":nombre,";
    }
    if($usuario->getEmail() != null){
        $campos = $campos."email,";
        $values = $values.":email,";
    }
    if($usuario->getPassword() != null){
        $campos = $campos."password,";
        $values = $values.":password,";
    }
    if($usuario->getDireccion() != null){
        $campos = $campos."direccion,";
        $values = $values.":direccion,";
    }
    if($usuario->getCp() != null){
        $campos = $campos."cp,";
        $values = $values.":cp,";
    }
    if($usuario->getTelefono() != null){
        $campos = $campos."telefono,";
        $values = $values.":telefono,";
    }
    if($usuario->getDni() != null){
        $campos = $campos."dni,";
        $values = $values.":dni,";
    }
    if($usuario->getMesa() != null){
        $campos = $campos."mesa,";
        $values = $values.":mesa,";
    }

    $campos = substr($campos,0,strlen($campos)-1);
    $values = substr($values,0,strlen($values)-1);
    return ["campos"=>$campos,"values"=>$values];
}

}

?>