wampserver 3.1.7 php 7.4.14

CREATE DATABASE sistema

CREATE TABLE `sistema`.`usuarios` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `matricula` VARCHAR(255) NOT NULL , `senha` VARCHAR(255) NOT NULL , `created` VARCHAR(255) NOT NULL , `status` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `sistema`.`clientes` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `cpf` VARCHAR(255) NOT NULL , `rg` VARCHAR(255) NOT NULL , `endereco` VARCHAR(255) NOT NULL , `numero` VARCHAR(255) NOT NULL , `estado` VARCHAR(255) NOT NULL , `cidade` VARCHAR(255) NOT NULL , `renda` VARCHAR(255) NOT NULL , `usuarios_id` VARCHAR(255) NOT NULL , `created` VARCHAR(255) NOT NULL , `status` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `sistema`.`produtos` ( `id` INT NOT NULL AUTO_INCREMENT , `descricao` VARCHAR(255) NOT NULL , `detalhamento` VARCHAR(255) NOT NULL , `preco_vista` VARCHAR(255) NOT NULL , `preco_prazo` VARCHAR(255) NOT NULL , `codigo_barras` VARCHAR(255) NOT NULL , `usuarios_id` VARCHAR(255) NOT NULL , `created` VARCHAR(255) NOT NULL , `status` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `sistema`.`vendas` ( `id` INT NOT NULL AUTO_INCREMENT , `produtos_id` VARCHAR(255) NOT NULL , `clientes_id` VARCHAR(255) NOT NULL , `quantidade` VARCHAR(255) NOT NULL , `forma_pagamento` VARCHAR(255) NOT NULL , `data` VARCHAR(255) NOT NULL , `valor_total` VARCHAR(255) NOT NULL , `usuarios_id` VARCHAR(255) NOT NULL , `created` VARCHAR(255) NOT NULL , `updated` VARCHAR(255) NOT NULL , `status` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

INSERT INTO `usuarios` (`id`, `nome`, `matricula`, `senha`, `created`, `status`) VALUES (NULL, 'admin', 'admin', MD5('admin'), '1', '1');