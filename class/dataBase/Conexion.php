<?php
          define('DB_HOST', 'localhost');
          define('DB_NAME', 'pruebas');
          define('DB_USER', 'root');
          define('DB_PASS', '');
          define('DB_CHARSET_UFT8', 'SET CHARACTER SET utf8');

        class Conexion{

            private $conexion = null;

            public function conectar(){
                try {
                    
                    $this->conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
                    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->conexion->exec(DB_CHARSET_UFT8);
                    return $this->conexion;

                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            }

            public function desconectar(){
                if($this->conexion != null){
                    $this->conexion = null;
                }
            }
        }
?>