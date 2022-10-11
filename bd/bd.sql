CREATE DATABASE projeto;

USE projeto;


CREATE TABLE alunos (
  `cod_aluno` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_aluno` VARCHAR(35) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL UNIQUE,
  `email` VARCHAR(25) NOT NULL,
  `senha_aluno` VARCHAR(15) NOT NULL,
  `turno` VARCHAR(20) NOT NULL,
  `matricula` VARCHAR(15) NOT NULL,
  `recado` VARCHAR(100) NOT NULL,
  `foto_aluno` VARCHAR(100) NOT NULL,
  `serie` VARCHAR(20) NOT NULL,
  `data_nascimento` DATE NULL,
  `data_ingresso` DATE NULL
  );
  
  CREATE TABLE funcionarios (
  `cod_funcionario` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_funcionario` VARCHAR(35) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL UNIQUE,
  `email` VARCHAR(25) NOT NULL,
  `senha_funcionario` VARCHAR(15) NOT NULL,
	`funcao` VARCHAR(15) NOT NULL
    );


CREATE TABLE cardapio (
  `cod_cardapio` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `dia_cardapio` VARCHAR(12) NOT NULL,
  `horario_cardapio` TIME NOT NULL,
  `alimento` VARCHAR(30) NOT NULL
);
    
CREATE TABLE cronograma (
  `cod_cronograma` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `dia_cronograma` VARCHAR(12) NOT NULL,
  `horario_cronograma` TIME NOT NULL,
  `disciplina` VARCHAR(25) NULL DEFAULT NULL
);

CREATE TABLE eventos (
  `cod_evento` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_evento` VARCHAR(30) NOT NULL,
  `foto_evento` LONGBLOB NOT NULL
    );
   

CREATE TABLE recados (
  `cod_recado` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_recado` VARCHAR(50) NOT NULL,
  `data_recado` DATE NOT NULL,
  `hora_recado` TIME NULL DEFAULT NULL
   );

drop table usuario;
alter table funcionarios add turno varchar(12);