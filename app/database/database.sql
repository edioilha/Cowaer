-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2015 às 16:24
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

--
-- Database: `duchefdb`
--

-- CREATE USER 'ducheff'@'localhost' IDENTIFIED BY 'ducheff';

-- GRANT ALL PRIVILEGES ON duchefdb.* TO 'ducheff'@'localhost' WITH GRANT OPTION;


-- Tabela: Funcionário

CREATE TABLE IF NOT EXISTS funcionarios(
	cod	 INT primary key auto_increment,
	nome VARCHAR(40) not null,
	nivel INT not null, -- Administrador:1, Atendente:2, Entregador:3
	login VARCHAR(15) not null,
	senha VARCHAR(70) not null,
	foto_url VARCHAR(100) NULL 
);

INSERT INTO `funcionarios`(`cod`, `nome`, `nivel`, `login`, `senha`) VALUES (null,'administrador',
1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997');

-- Tabela: Cliente

CREATE TABLE IF NOT EXISTS clientes(
	cod	 INT primary key auto_increment,
	login VARCHAR(15) not null,
	senha VARCHAR(50) not null,
	nome VARCHAR(40) not null,
	endereco VARCHAR(70) not null,
	telefone VARCHAR(20) not null,
	email VARCHAR(40) default null,
	latitude FLOAT default 0.00,
	longitude FLOAT default 0.00
);


-- Tabela: Guarnições

CREATE TABLE IF NOT EXISTS guarnicoes(
	nome VARCHAR(20) primary key
);


-- Tabela: Bebidas

CREATE TABLE IF NOT EXISTS bebidas(
	cod	 INT primary key auto_increment,
	nome VARCHAR(30) not null,
	valor FLOAT not null,
	foto_url VARCHAR(100) default null,
	deletada BOOLEAN default 0
		
);


-- Tabela: Molhos

CREATE TABLE IF NOT EXISTS molhos(
	cod	 INT primary key auto_increment,
	nome VARCHAR(15) not null,
	descricao TEXT,
	foto_url VARCHAR(100) default null,
	deletada BOOLEAN default 0
		
);


-- Tabela: Variedades

CREATE TABLE IF NOT EXISTS variedades(
	cod	 INT primary key auto_increment,
	nome VARCHAR(15) not null,
	descricao TEXT,
	foto_url VARCHAR(100) default null,
	deletada BOOLEAN default 0
);


-- Tabela: Tipo de Prato

CREATE TABLE IF NOT EXISTS tipo_prato(
	cod	 INT primary key auto_increment,
	nome VARCHAR(20) not null,
	com_guarnicoes  BOOLEAN default 0,
	com_molho 		BOOLEAN default 0,
	multivariedades BOOLEAN default 0,
	foto_url VARCHAR(100) default null,
	deletada BOOLEAN default 0
);


-- Tabela: Relação Tipo Prato x Variedade

CREATE TABLE IF NOT EXISTS pratos(
	cod	 INT primary key auto_increment,
	cod_tipo_prato	 INT,
	cod_variedade	 INT,
	valor	         FLOAT default 0.00,
	FOREIGN KEY(cod_tipo_prato) REFERENCES tipo_prato(cod),
	FOREIGN KEY(cod_variedade) REFERENCES variedades(cod)
);

ALTER TABLE  `pratos` ADD UNIQUE (`cod_tipo_prato` ,`cod_variedade`);


-- Tabela: Pedido

CREATE TABLE IF NOT EXISTS pedidos(
	cod	 INT primary key auto_increment,
	horario TIME not null,
	data DATE not null,
	valor_total FLOAT not null,
	status INT default 1 -- Enviado:1, Aceito:2, Rejeitado:3 Preparando:4, Pronto:5
						 -- Pago:6, Cancelado:7, Editando:8
);


-- Tabela: Item Pedido Pratos

CREATE TABLE IF NOT EXISTS itens_pedido(
	cod 	   INT primary key auto_increment,
	cod_pedido INT,
	cod_molho  INT,
	quantidade INT default 1,
	tipo INT default 1, -- Médio: 1 , Grande: 2
	FOREIGN KEY(cod_pedido) REFERENCES pedidos(cod),
	FOREIGN KEY(cod_molho) REFERENCES molhos(cod)
);


-- Tabela: Relação Item_Pedido x Pratos

CREATE TABLE IF NOT EXISTS relacao_itemped_pratos(
	cod_item INT not null,
	cod_prato INT not null,
	PRIMARY KEY(cod_item,cod_prato),
	FOREIGN KEY(cod_item) REFERENCES itens_pedido(cod),
	FOREIGN KEY(cod_prato) REFERENCES pratos(cod)
);


-- Tabela: Relação Item_Pedido x Guarnições

CREATE TABLE IF NOT EXISTS relacao_itemped_guarnicoes(
	cod_item INT not null,
	nome_guarnicao VARCHAR(20) not null,
	PRIMARY KEY(cod_item,nome_guarnicao),
	FOREIGN KEY(cod_item) REFERENCES itens_pedido(cod),
	FOREIGN KEY(nome_guarnicao) REFERENCES guarnicoes(nome)
);


-- Tabela: Relação Pedido x Bebida

CREATE TABLE IF NOT EXISTS relacao_pedido_bebida(
	cod_pedido INT not null,
	cod_bebida INT not null,
	PRIMARY KEY(cod_pedido,cod_bebida),
	FOREIGN KEY(cod_pedido) REFERENCES pedidos(cod),
	FOREIGN KEY(cod_bebida) REFERENCES bebidas(cod)
);
