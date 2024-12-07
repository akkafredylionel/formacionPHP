<?php

    require_once("model/Usuario.php");
    require_once("interfaces/GestionUsuario.php");
    require_once("dataBase/Conexion.php");

    class GestionUsuarioImpl implements GestionUsuario{

        private $DBconexion;

        public function agregar(Usuario $usuario): bool{
            $usuarioAniadido = false;
            if ($usuario != null && !$this->existeUsuarioDuplicado($usuario)) {
                $this->DBconexion = new Conexion();
                $conexion = $this->DBconexion->conectar();
                $camposValues = $this->determinarCamposAgregar($usuario);
                $sql = "INSERT INTO usuario (" . $camposValues["campos"] . ") VALUES (" . $camposValues["values"] . ")";
                $PDOStatement = $conexion->prepare($sql);
                $usuario->setId($this->generarClave());
                $PDOStatement->bindParam(":id", $usuario->getId());
                $this->bindParams( $usuario, $PDOStatement);
                $PDOStatement->execute();
                $usuarioAniadido = true;
                $this->DBconexion->desconectar();
            }
            return $usuarioAniadido;
        }
        public function modificar(Usuario $usuario): bool{
            $usuarioModificado = false;
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();
            $campos = $this->determinarCamposModificacion($usuario);
            $sql = "UPDATE Usuario SET" . $campos . "WHERE id = " . $usuario->getId();
            $PDOStatement = $conexion->prepare($sql);
            if ($PDOStatement) {
                $this->bindParams( $usuario, $PDOStatement);
                $PDOStatement->execute();
                $usuarioModificado = true;
            }
            $this->DBconexion->desconectar();
            return $usuarioModificado;
        }

        public function eliminar(int $id): bool{
            $usuarioEliminado = false;
            if($this->existeUsuario($id)){
                $this->DBconexion = new Conexion();
                $conexion = $this->DBconexion->conectar();
                $sql = "DELETE FROM Usuario WHERE id = :id";
                $PDOStatement = $conexion->prepare($sql);
                $PDOStatement->bindParam(":id", $id);
                $PDOStatement->execute();
                $usuarioEliminado = true;
                $this->DBconexion->desconectar();
            }
            return $usuarioEliminado;
        }

        public function obtener(int $id) {
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $PDOStatement = $conexion->prepare($sql);
            $PDOStatement->bindParam(":id", $id);
            $PDOStatement->execute();
            $result = $PDOStatement->fetch();
            $usuario = null;
            if($result != null){
                $usuario = $result;
            }
            $this->DBconexion->desconectar();
            return $usuario;
        }

        public function obtenerTodo() {
            $conexion = new Conexion();
            $conexion = $conexion->conectar();
            $sql = "SELECT * FROM usuario";
            $PDOStatement = $conexion->prepare($sql);
            $PDOStatement->execute();
            return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
        }

        private function existeUsuario($id): bool{
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $PDOStatement = $conexion->prepare($sql);
            $PDOStatement->bindParam(":id", $id);
            $PDOStatement->execute();
            $result = $PDOStatement->fetch();
            $this->DBconexion->desconectar();
            return $result != null;
        }

        private function generarClave(): int{
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();
            $sql = "SELECT Max(id) FROM usuario";
            $PDOStatement = $conexion->prepare($sql);
            $PDOStatement->execute();
            $result = $PDOStatement->fetch();
            $this->DBconexion->desconectar();
            return $result[0]+ 1;
        }

        private function determinarCamposModificacion(Usuario $usuario): string{
            $campos = "";
            if ($usuario->getNombre() != null) {
                $campos = $campos . " nombre = :nombre ,";
            }
            if ($usuario->getEmail() != null) {
                $campos = $campos . " email = :email ,";
            }
            if ($usuario->getPassword() != null) {
                $campos = $campos . " password = :password ,";
            }
            if ($usuario->getDireccion() != null) {
                $campos = $campos . " direccion = :direccion ,";
            }
            if ($usuario->getCp() != null) {
                $campos = $campos . " cp = :cp ,";
            }
            if ($usuario->getTelefono() != null) {
                $campos = $campos . " telefono = :telefono ,";
            }
            if ($usuario->getDni() != null) {
                $campos = $campos . " dni = :dni ,";
            }
            if ($usuario->getMesa() != null) {
                $campos = $campos . " mesa = :mesa ,";
            }
            return substr($campos, 0, strlen($campos) - 1);
        }

        private function determinarCamposAgregar(Usuario $usuario): array{
            $campos = " id,";
            $values = " :id,";
            if ($usuario->getNombre() != null) {
                $campos = $campos . " nombre ,";
                $values = $values . " :nombre ,";
            }
            if ($usuario->getEmail() != null) {
                $campos = $campos . " email ,";
                $values = $values . " :email ,";
            }
            if ($usuario->getPassword() != null) {
                $campos = $campos . " password ,";
                $values = $values . " :password ,";
            }
            if ($usuario->getDireccion() != null) {
                $campos = $campos . " direccion ,";
                $values = $values . " :direccion ,";
            }
            if ($usuario->getCp() != null) {
                $campos = $campos . " cp ,";
                $values = $values . " :cp ,";
            }
            if ($usuario->getTelefono() != null) {
                $campos = $campos . " telefono ,";
                $values = $values . " :telefono ,";
            }
            if ($usuario->getDni() != null) {
                $campos = $campos . " dni ,";
                $values = $values . " :dni ,";
            }
            if ($usuario->getMesa() != null) {
                $campos = $campos . " mesa ,";
                $values = $values . " :mesa ,";
            }
            $campos = substr($campos, 0, strlen($campos) - 1);
            $values = substr($values, 0, strlen($values) - 1);
            return ["campos" => $campos, "values" => $values];
        }

        private function bindParams(Usuario $usuario,PDOStatement $PDOStatement){
                if ($usuario->getNombre() != null) {
                    $PDOStatement->bindParam(":nombre", $usuario->getNombre());
                }
                if ($usuario->getEmail() != null) {
                    $PDOStatement->bindParam(":email", $usuario->getEmail());
                }
                if ($usuario->getPassword() != null) {
                    $PDOStatement->bindParam(":password", $usuario->getPassword());
                }
                if ($usuario->getDireccion() != null) {
                    $PDOStatement->bindParam(":direccion", $usuario->getDireccion());
                }
                if ($usuario->getCp() != null) {
                    $PDOStatement->bindParam(":cp", $usuario->getCp());
                }
                if ($usuario->getTelefono() != null) {
                    $PDOStatement->bindParam(":telefono", $usuario->getTelefono());
                }
                if ($usuario->getDni() != null) {
                    $PDOStatement->bindParam(":dni", $usuario->getDni());
                }
                if ($usuario->getMesa() != null) {
                    $PDOStatement->bindParam(":mesa", $usuario->getMesa());
                }
        }   

        private function existeUsuarioDuplicado(Usuario $usuario): bool{
            $this->DBconexion = new Conexion();
            $conexion = $this->DBconexion->conectar();
            $sql = "SELECT * FROM usuario WHERE email = :email OR dni = :dni OR telefono = :telefono ";
            $PDOStatement = $conexion->prepare($sql);
            $PDOStatement->bindParam(":email", $usuario->getEmail());
            $PDOStatement->bindParam(":dni", $usuario->getDni());
            $PDOStatement->bindParam(":telefono", $usuario->getTelefono());
            $PDOStatement->execute();
            $result = $PDOStatement->fetch();
            $this->DBconexion->desconectar();
            return $result != null;
        }
        
    }
