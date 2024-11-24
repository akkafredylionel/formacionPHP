CREATE TABLE Usuario (
    id INT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) ,
    cp VARCHAR(10) ,
    telefono VARCHAR(20) ,
    dni VARCHAR(20)
);

CREATE TABLE Mesa (
    id INT PRIMARY KEY,
    numeroMesa INT NOT NULL,
    constraint fk_mesa_usuario FOREIGN KEY (id) REFERENCES Usuario(id)
);
