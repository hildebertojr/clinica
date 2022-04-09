CREATE DATABASE `clinica`;



CREATE TABLE `tbcliente` (
  `tbcliente_id` int NOT NULL AUTO_INCREMENT,
  `tbcliente_nome` varchar(200) NOT NULL,
  `tbcliente_logradouro` varchar(200) NOT NULL,
  `tbcliente_numero` int NOT NULL,
  `tbcliente_complemento` varchar(200) DEFAULT NULL,
  `tbcliente_cep` decimal(8,0) NOT NULL,
  `tbcliente_bairro` varchar(100) NOT NULL,
  `tbcliente_cidade` varchar(150) NOT NULL,
  `tbcliente_telefone` varchar(15) NOT NULL,
  `tbcliente_email` varchar(150) DEFAULT NULL,
  `tbcliente_planosaude` varchar(150) NOT NULL,
  `tbcliente_dadoscarteira` varchar(150) NOT NULL,
  `tbcliente_idade` int DEFAULT NULL,
  PRIMARY KEY (`tbcliente_id`)
);

CREATE TABLE `tbmedico` (
  `tbmedico_id` int NOT NULL AUTO_INCREMENT,
  `tbmedico_nome` varchar(150) NOT NULL,
  `tbmedico_especialidade` varchar(150) NOT NULL,
  `tbmedico_crm` varchar(8) NOT NULL,
  PRIMARY KEY (`tbmedico_id`)
) ;

CREATE TABLE `tbtipo_procedimento` (
  `tbtipo_procedimento_id` int NOT NULL AUTO_INCREMENT,
  `tbtipo_procedimento` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tbtipo_procedimento_id`);

 
CREATE TABLE `tbmedicos_procedimentos` (
  `tbmedicos_procedimentos_id` int unsigned NOT NULL AUTO_INCREMENT,
  `tbtipo_procedimento_id` int NOT NULL,
  `tbmedico_id` int NOT NULL,
  PRIMARY KEY (`tbmedicos_procedimentos_id`),
  KEY `tbmedicos_procedimentos_FKIndex1` (`tbmedico_id`),
  KEY `tbmedicos_procedimentos_FKIndex2` (`tbtipo_procedimento_id`)
);
CREATE TABLE `tbpre_cadastro` (
  `tbpre_cadastro_id` int unsigned NOT NULL AUTO_INCREMENT,
  `tbmedicos_procedimentos_id` int unsigned NOT NULL,
  `tbcliente_id` int NOT NULL,
  `tbpre_cadastro_data` date DEFAULT NULL,
  `tbpre_cadastro_Hora` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`tbpre_cadastro_id`),
  KEY `tbpre_cadastro_FKIndex1` (`tbcliente_id`),
  KEY `tbpre_cadastro_FKIndex2` (`tbmedicos_procedimentos_id`)
);

