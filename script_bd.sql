CREATE DATABASE cantina;

USE cantina;

CREATE TABLE lanche
(
idLanche int primary key AUTO_INCREMENT,
descricao varchar(100),
preco float
);

CREATE TABLE cliente
(
rgCliente varchar(50) primary key,
nome varchar(50),
data_nascimento datetime,
endereco varchar(20),
email varchar(50)
);

CREATE TABLE pedido
(
idPedido int primary key AUTO_INCREMENT,  
data_pedido datetime, 
valor float,
idLanche int REFERENCES lanche(idLanche),
rgCliente varchar(50) REFERENCES cliente(rgCliente)   
)
    