USE baseDANIEL

CREATE TABLE tb_usuarios (
	idusuario INT NOT NULL IDENTITY PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
	dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('user','!@#$');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios set dessenha = 'annajulia' WHERE idusuario =2;

DELETE FROM tb_usuarios WHERE idusuario = 1;

TRUNCATE TABLE tb_usuarios;