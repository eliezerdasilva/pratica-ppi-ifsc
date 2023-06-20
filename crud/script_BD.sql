create database web;
use web;
create table usuarios(
id int not null primary key auto_increment,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar(255) not null,
data_nascimento date not null,
telefone varchar(255) not null
);