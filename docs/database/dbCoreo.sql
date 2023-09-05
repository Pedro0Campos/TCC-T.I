create database dbCoreo;

use dbCoreo;

create table `Usuarios` (
	idUser int not null auto_increment primary key, 
	nome varchar(50) not null,
    email varchar(60) not null,
    senha varchar(255) not null,
    tipoUser boolean not null default 0,
    imgUser varchar(50) default 'img-padrao',
    contaDesativda boolean not null default 0
);

create table `Comentarios` (
	idComent int not null auto_increment primary key,
    idUser int not null,
    Constraint FK_Coment_User foreign key (idUser) references Usuarios(idUser),
    txtComent varchar(150),
    dataComent datetime not null
);

UPDATE Usuarios SET tipoUser = 1 WHERE idUser = 1