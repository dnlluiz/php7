USE dbphp7;

CREATE TABLE tb_usuarios (
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
	dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) values ('user','teste');
INSERT INTO tb_usuarios (deslogin, dessenha) values ('daniel','senha');
INSERT INTO tb_usuarios (deslogin, dessenha) values ('root','!@#$');
INSERT INTO tb_usuarios (deslogin, dessenha) values ('jose','1234567890');
INSERT INTO tb_usuarios (deslogin, dessenha) values ('joao','123456');

SELECT * FROM tb_usuarios;

SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();

UPDATE tb_usuarios set dessenha = 'annajulia' WHERE idusuario =2;

DELETE FROM tb_usuarios WHERE idusuario = 1;

TRUNCATE TABLE tb_usuarios;

/* Remover safe update Menu Edit->Preferences->SQL Editor-> unmark Safe Updates */