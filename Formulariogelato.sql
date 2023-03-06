 create database formulariogelato;
 use formulariogelato;
 
create table usuarios(
id int primary key auto_increment,
email varchar(50) not null,
nome varchar(50) not null,
fone bigint not null,
endereco varchar(50) not null,
cidade varchar(15) not null,
senha varchar(15) not null);
 
