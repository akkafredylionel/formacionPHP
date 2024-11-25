

Drop table Usuario;
Drop table Mesa;


CREATE TABLE Mesa (
    nombreMesa VARCHAR(255) PRIMARY KEY NOT NULL
);


CREATE TABLE Usuario (
    id INT PRIMARY KEY NOT NULL,
    nombre VARCHAR(255)NOT NULL,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    direccion VARCHAR(255) ,
    cp VARCHAR(10) ,
    telefono VARCHAR(20)UNIQUE,
    dni VARCHAR(20) UNIQUE,
    mesa VARCHAR(255) NOT NULL,
    constraint fk_usuario_mesa FOREIGN KEY (mesa) REFERENCES Mesa(nombreMesa)
);


insert into Mesa(nombreMesa)values("Mesa1");
insert into Mesa(nombreMesa)values("Mesa2");
insert into Mesa(nombreMesa)values("Mesa3");
insert into Mesa(nombreMesa)values("Mesa4");

insert into Usuario(id,nombre,email,password,direccion,cp,telefono,dni,mesa)values(1,"Juan Pérez"    ,"juan.perez@example.com"    ,"juan.perez"    ,"Calle Falsa 123"         ,"28001","612345678","12345678A","Mesa1");
insert into Usuario(id,nombre,email,password,direccion,cp,telefono,dni,mesa)values(2,"María López"   ,"maria.lopez@example.com"   ,"maria.lopez"   ,"Avenida Siempre Viva 456","28002","623456789","23456789B","Mesa1");
insert into Usuario(id,nombre,email,password,direccion,cp,telefono,dni,mesa)values(3,"Carlos García" ,"carlos.garcia@example.com" ,"carlos.garcia" ,"Calle Ocho 789"          ,"28003","634567890","34567890C","Mesa2");
insert into Usuario(id,nombre,email,password,direccion,cp,telefono,dni,mesa)values(4,"Ana Martínez"  ,"ana.martinez@example.com"  ,"carlos.garcia" ,"Paseo de la Reforma 321" ,"28004","645678901","45678901D","Mesa2");
insert into Usuario(id,nombre,email,password,direccion,cp,telefono,dni,mesa)values(5,"Luis Rodríguez","luis.rodriguez@example.com","luis.rodriguez","Calle del Río 159"       ,"28005","656789012","56789012E","Mesa3");