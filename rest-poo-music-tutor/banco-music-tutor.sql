CREATE SCHEMA IF NOT EXISTS `musictutorapi` DEFAULT CHARACTER SET latin1 ;
USE `musictutorapi` ;
-- drop database musictutorapi;
-- -----------------------------------------------------
-- Table `dbapi`.`musictutor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `musictutorapi`.`usuario` (
  id INT(10) NOT NULL AUTO_INCREMENT ,
  nome VARCHAR(100) NOT NULL ,
  email VARCHAR(100) NOT NULL ,
  status_conta binary NOT NULL ,
  status_moderador binary NOT NULL ,
  
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 5;

CREATE TABLE IF NOT EXISTS `musictutorapi`.`musica` (
  id INT(10) NOT NULL AUTO_INCREMENT ,
  nome_musica VARCHAR(100) NOT NULL ,
  compositor  VARCHAR(100) NOT NULL ,
  ano datetime NOT NULL,
  genero VARCHAR(100) NOT NULL ,
  single VARCHAR(100) NOT NULL ,
  album VARCHAR(100) NOT NULL ,
  duracao VARCHAR(7) NOT NULL ,
  descricao VARCHAR(100) NOT NULL ,
  cifra VARCHAR(100) NOT NULL ,
  
  PRIMARY KEY (`id`)
  )
  ENGINE = InnoDB
AUTO_INCREMENT = 5;

CREATE TABLE IF NOT EXISTS `musictutorapi`.`comentarios` (
  id INT(10) NOT NULL AUTO_INCREMENT ,
  usuario_id INT(10) NOT NULL,
  descricao VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`),
  KEY `fk_usuario` (`usuario_id`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
)
  ENGINE = InnoDB
AUTO_INCREMENT = 5;

USE musictutorapi;

#usuario
INSERT INTO usuario(
    nome,
    email,
	status_conta,
    status_moderador
) VALUES (
    'Mario da Silva Silva',
    'mss@gmail.com',
    true,
    false
);

INSERT INTO usuario(
    nome,
    email,
	status_conta,
    status_moderador
) VALUES (
    'Maria dos Santos Barbosa',
    'msbarbosa@gmail.com',
    true,
    false
);

INSERT INTO usuario(
    nome,
    email,
	status_conta,
    status_moderador
) VALUES (
    'Vitoria Caroline da Silva',
    'vik@hotmail.com',
    true,
    false
);

INSERT INTO usuario(
    nome,
    email,
	status_conta,
    status_moderador
) VALUES (
    'Carol das Chagas',
    'carolzinha@gmail.com',
    true,
    true
);

#musica
INSERT INTO musica(
    nome_musica,
    compositor,
	ano,
    genero,
    single,
    album,
    duracao,
    descricao,
    cifra
) VALUES (
    'Voce me fez sofrer',
    'Geraldinho',
    "2011-03-11",
    'sofrencia',
    'Nunca mais',
    'Nunca Mais',
    '00:02:35',
    'Musicas para sofrer',
    'C D C DC D Em G Em C D G D G Em C G D G Em C Cm'
);

INSERT INTO musica(
    nome_musica,
    compositor,
	ano,
    genero,
    single,
    album,
    duracao,
    descricao,
    cifra
) VALUES (
    'Paradinha',
    'Anitta',
    "2017-03-11",
    'Pop',
    'Paradinha',
    'Paradinha internacional',
    '00:03:15',
    'Musica internacionalmente tocada',
    'C D C DC D Em G Em C D G D G Em C G D G Em C Cm'
);

INSERT INTO musica(
    nome_musica,
    compositor,
	ano,
    genero,
    single,
    album,
    duracao,
    descricao,
    cifra
) VALUES (
    'Shape of You',
    'Ed Sherran',
    "2017-04-15",
    'Pop',
    'Shape Of You',
    'Divide',
    '00:03:35',
    'Musicas internacionalmente famosas',
    'C D C DC D Em G Em C D G D G Em C G D G Em C Cm'
);

INSERT INTO musica(
    nome_musica,
    compositor,
	ano,
    genero,
    single,
    album,
    duracao,
    descricao,
    cifra
) VALUES (
    'Pula todo mundo',
    'Ivete',
    "2001-07-11",
    'Axe',
    'Alegria',
    'Alegria',
    '00:04:05',
    'Musicas para se sentir feliz',
    'C D C DC D Em G Em C D G D G Em C G D G Em C Cm'
);

#COMENTARIOS
INSERT INTO comentarios(
    usuario_id,
    descricao
) VALUES (
	2,
    'Muito ruim esta musica'
);

INSERT INTO comentarios(
    usuario_id,
    descricao
) VALUES (
	1,
    'Para de ser tao legal Ivete'
);

INSERT INTO comentarios(
	usuario_id,
    descricao
) VALUES (
	3,
    'Odeio essa cantora'
);