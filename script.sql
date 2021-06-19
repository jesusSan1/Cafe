create database Cafe;
use cafe;

-- creacion de nueva tabla para la app
create table Cafeticultor
(
	id_Agricultor int auto_increment primary key,
    nombre varchar (30) not null,
    apepat varchar(30) not null,
    apemat varchar(30) not null,
    numeroCel varchar (30) not null,
    usuario varchar (30) not null,
    pwd varchar (30) not null
 ); 

 create table Consulta
 (
	id_Consulta int auto_increment primary key,
    id_Agricultor int not null,
	foto_cultivo blob,
    constraint FOREIGN KEY (id_Agricultor) REFERENCES cafeticultor(id_Agricultor)
 );
 
  create table Predios
 (
	id_Predio int auto_increment primary key,
	id_Agricultor int not null,
	superficie varchar(100),
	localizacion point,
	constraint FOREIGN KEY (id_Agricultor) REFERENCES cafeticultor(id_Agricultor)
 );
 create table Recomendacion
 (
	id_Recomendacion int auto_increment primary key,
    id_Consulta int not null,
    descripcion varchar(250) not null,
     constraint FOREIGN KEY (id_Consulta) REFERENCES Consulta(id_Consulta)
 );
 

  create table Cultivos
 (
	id_Cultivo int auto_increment primary key,
    id_Predio int not null,
	densidad smallint not null,
	tipo_Cultivo varchar(20) not null,
     constraint FOREIGN KEY (id_Predio) REFERENCES Predios(id_Predio)
 );
 
create table Problemas_Fitosanitarios
 (
	id_problema int auto_increment primary key,
    id_Recomendacion int not null,
    id_Cultivo int not null,
	nombre_Problema varchar(150) not null,
	intensidad varchar(20) not null, 
	causas varchar(200) not null,
     constraint FOREIGN KEY (id_Recomendacion) REFERENCES Recomendacion(id_Recomendacion),
     constraint FOREIGN KEY (id_Cultivo) REFERENCES Cultivos(id_Cultivo)
 );
 

create table localizacion
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	nombreU VARCHAR( 60 ) NOT NULL ,
    direccion VARCHAR( 80 ) NOT NULL ,
    latitud FLOAT NOT NULL ,
    longitud FLOAT NOT NULL 
);

-- tabla para el administrador
create table administrador(
    usuario varchar (30) not null,
    pwd varchar (30) not null
);
-- INSERTAR LOS VALORES DE ADMIN
INSERT INTO `cafe`.`administrador` (`usuario`, `pwd`)
VALUES ('admin', 'QWERTY%123');

-- Tabla para los eventos de calendario
create table eventos(
	id int auto_increment primary key,
    title varchar (255),
    descripcion text,
    color varchar(255),
    textColor varchar (255),
    start datetime,
    end datetime
);
-- Insertar valores a la tabla de eventos
INSERT INTO `cafe`.`eventos` (`id`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`)
VALUES ('1', 'Evento 1', 'Regar planta', '#FF0F0', '#FFFFFF', '2021-03-17 02:44:00', '2021-03-19 02:44:00');

-- Drop table localizacion;
select * from eventos;
select * from Cafeticultor;
select * from administrador;
select * from Consulta;
select * from Cultivos;
select * from Predios;
select * from problemas_Fitosanitarios;
select * from Recomendacion;
select * from roles;
-- drop table cafeticultor;
-- drop table admin;
-- drop database cafe;