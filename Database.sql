create database ParkAttraction;
USE ParkAttraction;

create table utilisateur (
	id_client INT auto_increment primary KEY,
	nom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255)
    );
    
create table attraction (
	id_attraction INT auto_increment primary key,
    nom varchar(255) NOT NULL,
    niveau_peur INT(10) NOT NULL
    );
    
Insert into attraction (nom, niveau_peur) VALUES
	('tonnerre_de_zeus', 9),
    ('panzeir',10),
    ("la soucoupe",3);
Insert into utilisateur (nom, age, email, mot_de_passe) values
	('kevin',48,'kevin.artisi@gmail.com','kevin'),
    ('jhon',18,'jhon.truc@hotmail.com','jhonny'),
    ('vador',22,'vador@gmail.com','vador');
    