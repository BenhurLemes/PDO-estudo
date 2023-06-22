# PHP

## PDO PHP DATA OBJECT
- extensão da linguagem PHP para acesso a banco de dados. Totalmente orientado a objetos ele possui diversos recursos importantes, além de suporte a diversos mecanismos de banco de dados. 

### CRUD
- CRUD são as quatro operações básicas do desenvolvimento de uma aplicação, sendo utilizadas em bases de dados relacionais fornecidas aos utilizadores do sistema.
  - Create -> Cria um novo registro, insere dados utilizando a palavra reservada INSERT do SQL
  - Read   -> Lê dados do banco, pega informações usando a palavra reservada SELECT do SQL
  - Update -> Atualiza os dados existentes, sobrescrevendo informações com a palavra reservada UPDATE do SQL
  - Delete -> Apaga informações existentes (para sempre), com uso da palavra reservada DELETE do SQL

### mySQL

No MySQL existem diversas operações que podem ser feitas,
é possível realizar verificações e comparações nas
é possível realizar JOINS, que são consulta e múltipla tabelas, verificando dados no processo.
Ao final das consultas ainda podemos determinar parâmetros, como limite de registros e outros, pesquise mais

Crie sua tabela de usuários com a seguinte query:

* CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wrong_logins` int(9) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(9) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;