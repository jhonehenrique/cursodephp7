USE dbphp7;

CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);


INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('root', '!@#$%');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;

DELETE FROM tb_usuarios WHERE idusuario = 1;

TRUNCATE TABLE tb_usuarios;



CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogin VARCHAR(64),
pdessenha VARCHAR(256)
)
BEGIN
	INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(pdeslogin, pdessenha);
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END

