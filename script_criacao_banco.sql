CREATE DATABASE id5161226_moveis_dos_sonhos;
USE moveis_dos_sonhos;

CREATE TABLE users (
usr_id INT NOT NULL AUTO_INCREMENT,
usr_email VARCHAR(40) NOT NULL,
usr_nome VARCHAR(40) NOT NULL,
usr_senha VARCHAR(40) NOT NULL,
CONSTRAINT pk_usr PRIMARY KEY (usr_id)
);

CREATE TABLE moveis(
mov_id INT NOT NULL AUTO_INCREMENT,
mov_nome VARCHAR(40) NOT NULL,
mov_img VARCHAR(40) NOT NULL,
mov_preco DECIMAL(6,2) NOT NULL,
mov_estoque INT NOT NULL,
mov_descricao text,
mov_categoria VARCHAR(40) NOT NULL,
mov_usr_id INT NOT NULL,
CONSTRAINT pk_mov PRIMARY KEY (mov_id),
CONSTRAINT fk_mov_usr FOREIGN KEY (mov_usr_id) REFERENCES users(usr_id)
);

ALTER TABLE users ADD role VARCHAR(20);