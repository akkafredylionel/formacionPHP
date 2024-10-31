<?php 
    class Usuario{

        public int    $id;
        public String $nombre;
        public String $email;
        public String $password;
        public String $direccion;
        public String $cp;
        public String $telefono;
        public String $dni;

        function __construct(int $id,String $nombre,String $email,String $password,String $direccion,String $cp,String $telefono,String $dni){
            $this->id        = $id;
            $this->nombre    = $nombre;
            $this->email     = $email;
            $this->password  = $password;
            $this->direccion = $direccion;
            $this->cp        = $cp;
            $this->telefono  = $telefono;
            $this->dni       = $dni;
        }

        public function getId(){ return $this->id;}
        public function getNombre(){return $this->nombre;}
        public function getEmail(){return $this->email;}
        public function getPassword(){return $this->password;}
        public function getDireccion(){return $this->direccion;}
        public function getCp(){return $this->cp;}
        public function getTelefono(){return $this->telefono;}
        public function getDni(){return $this->dni;}
    
        public function setId(int $id){ $this->id = $id;}
        public function setNombre(String $nombre){$this->nombre = $nombre;}
        public function setEmail(String $email){$this->email = $email;}
        public function setPassword(String $password){$this->password = $password;}
        public function setDireccion(String $direccion){$this->direccion = $direccion;}
        public function setCp(String $cp){$this->cp = $cp;}
        public function setTelefono(String $telefono){$this->telefono = $telefono;}
        public function setdni(String $dni){$this->dni = $dni;}

        public function toString(){
            return "Id = ".$this->id.", Nombre = ".$this->nombre.", Email = ".$this->email.", Password = ".$this->password.", Dirección = ".$this->direccion.", Cp = ".$this->cp.", Teléfono = ".$this->telefono .", Dni = ".$this->dni;     
        }

    }
?>