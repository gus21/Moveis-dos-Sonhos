
CREATE DATABASE moveis_dos_sonhos;
USE moveis_dos_sonhos;

CREATE TABLE usr_roles(
	rol_id INT NOT NULL AUTO_INCREMENT,
	rol_nome VARCHAR(20) NOT NULL,
	CONSTRAINT pk_rol PRIMARY KEY (rol_id)	
);

CREATE TABLE users (
usr_id INT NOT NULL AUTO_INCREMENT,
usr_email VARCHAR(40) NOT NULL,
usr_nome VARCHAR(40) NOT NULL,
usr_senha VARCHAR(40) NOT NULL,
usr_rol_id INT NOT NULL,
CONSTRAINT pk_usr PRIMARY KEY (usr_id),
CONSTRAINT fk_rol_usr FOREIGN KEY (usr_rol_id) REFERENCES usr_roles(rol_id)
);

CREATE TABLE moveis(
mov_id INT NOT NULL AUTO_INCREMENT,
mov_nome VARCHAR(40) NOT NULL,
mov_img VARCHAR(200) NOT NULL,
mov_preco DECIMAL(6,2) NOT NULL,
mov_categoria VARCHAR(20) NOT NULL,
mov_estoque INT NOT NULL,
mov_descricao TEXT,
mov_usr_id INT NOT NULL,
CONSTRAINT pk_mov PRIMARY KEY (mov_id),
CONSTRAINT fk_mov_usr FOREIGN KEY (mov_usr_id) REFERENCES users(usr_id)
);

insert into usr_roles (rol_nome) values("admin");
insert into usr_roles (rol_nome) values("vendedor");
insert into usr_roles (rol_nome) values("cliente");
INSERT INTO users (usr_email,usr_nome, usr_senha,usr_rol_id) VALUES ("admin@admin.com","admin","21232f297a57a5a743894a0e4a801fc3",1);