CREATE DATABASE sistema_login;

USE sistema_login;

CREATE TABLE usuario (
    id INT(4) AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100),
    PRIMARY KEY (id)
)
