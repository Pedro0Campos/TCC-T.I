create database dbCoreo;

use dbCoreo;

create table `Usuarios` (
	idUser int not null auto_increment primary key, 
	nome varchar(50) not null,
    email varchar(60) not null,
    senha varchar(255) not null,
    tipoUser binary not null
);

create table `Ensaios` (
	idEnsaio int not null auto_increment primary key,
    idUser int not null,
    Constraint FK_Ensaios_Usuarios foreign key (idUser) references Usuarios(idUser),
    dataEnsaio date not null,
    curtidas int,
    horario time not null
);

create table `Comentarios` (
	idComent int not null auto_increment primary key,
    idUser int not null,
    Constraint FK_Coment_User foreign key (idUser) references Usuarios(idUser),
    txtComent varchar(300)
);
