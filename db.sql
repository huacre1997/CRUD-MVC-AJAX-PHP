--Creamos la base de datos
CREATE DATABASE Villareal

--Usamos la base de datos "Villareal"
USE Villareal

--Creamos nuestra tabla "Usuarios"
CREATE TABLE users {
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    phone varchar(15) NOT NULL,
    created datetime NOT NULL,
    modified datetime NOT NULL
}