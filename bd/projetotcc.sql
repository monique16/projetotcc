CREATE DATABASE projeto;

USE projeto;

CREATE TABLE alunos (
  cod_aluno INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_aluno VARCHAR(35) NOT NULL,
  cpf VARCHAR(11) NOT NULL UNIQUE,
  email VARCHAR(25) NOT NULL,
  senha_aluno VARCHAR(15) NOT NULL,
  turno VARCHAR(20) NOT NULL,
  matricula VARCHAR(15) NOT NULL,
  recado VARCHAR(100) NOT NULL,
  foto_aluno VARCHAR(100) NOT NULL,
  serie VARCHAR(20) NOT NULL,
  data_nascimento DATE NULL,
  data_ingresso DATE NULL
  );
  
  CREATE TABLE funcionarios (
  cod_funcionario INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_funcionario VARCHAR(35) NOT NULL,
  cpf VARCHAR(11) NOT NULL UNIQUE,
  email VARCHAR(25) NOT NULL,
  senha_funcionario VARCHAR(15) NOT NULL,
  funcao VARCHAR(15) NOT NULL,
  foto_funcionario VARCHAR(100) NOT NULL
    );


CREATE TABLE cardapio (
  cod_cardapio INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  dia_cardapio VARCHAR(12) NOT NULL,
  horario_cardapio TIME NOT NULL,
  alimento VARCHAR(30) NOT NULL,
  foto_alimento VARCHAR(100) NOT NULL
);
    
CREATE TABLE cronograma (
  cod_cronograma INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  horario_cronograma TIME NULL,
  disciplina_seg VARCHAR(25) NULL,
  disciplina_terc VARCHAR(25) NULL,
  disciplina_quar VARCHAR(25) NULL,
  disciplina_quin VARCHAR(25) NULL,
  disciplina_sext VARCHAR(25) NULL
);

CREATE TABLE eventos (
  cod_evento INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_evento VARCHAR(30) NOT NULL,
  foto_evento VARCHAR(100) NOT NULL
    );
   
CREATE TABLE recados (
  cod_recado INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_recado VARCHAR(50) NOT NULL,
  cor VARCHAR(10) NOT NULL,
  start DATETIME NOT NULL, 
  end DATETIME NOT NULL 
   );

