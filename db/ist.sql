/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE `ist`;
USE `ist`;

# Dump of table pessoas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE `pessoas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '',
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `endereco` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table if not exists conta (id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_pessoa INT(30) unsigned NOT NULL,
numero INT(30) NOT NULL,
 FOREIGN KEY (id_pessoa) REFERENCES pessoas(id)
 );
 
create table if not exists movimentacao (id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_conta INT(30) unsigned NOT NULL,
tipo_transacao TINYINT NOT NULL,
valor DOUBLE NOT NULL,
created_at datetime default now(),
 FOREIGN KEY (id_conta) REFERENCES conta(id)
 );
 
LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;

INSERT INTO `pessoas` (`id`, `nome`, `cpf`, `endereco`)
VALUES
 (1, 'Marcelo Ramos', '48349778032', 'Rua Luiz Demo, n 120, Bairro Passagem, Tubarão/SC'),
 (2, 'Renato Silva', '76537136024', 'Rua Alexandre de Sá, n 98, Bairro Dehon, Tubarão/SC'),
 (3, 'Maria Cordeiro', '01054804010', 'Rua Júlio Pozza, n 450, Bairro São João, Tubarão/SC');

/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
