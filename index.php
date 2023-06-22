<?php 

include("config.php");

$pdo = Conectar();

$TABLE_USERS = 'users'; #definir a tabela


### PROCURANDO DADOS EM UMA TABELA 

$id = 1;
$seeALL = $pdo->prepare('SELECT * FROM '.$TABLE_USERS.' WHERE id = :id'); # o :id o parâmetro ficará em aberto para o uso
$seeALL->execute(array('id' => $id)); #vetor nominal

$result = $seeALL->fetchAll(); # Retorna um array com todas as linhas da consulta, ideal para uma busca por nome ou por endereço. 
var_dump($seeALL);

foreach ($result as $key) {
    var_dump($key); #exibe informações organizadas, mostrando o seu tipo e valor.
}


### INSERÇÃO DE DADOS EM UMA TABELA 

$seeALL = $pdo->prepare('INSERT INTO '.$TABLE_USERS.' (cliente_id, nome, email, telefone, endereço, estado_id, cidade_id, observacoes)
VALUES (:clientes_id, :nome, :email, :telefone, :endereço, :estado_id, :cidade_id, :observacoes)');

/* bindParam() - Para realizar a definição do valor de um parâmetro, esse método recebe como argumento uma referência, 
ou seja, uma variável ou uma constante. Isso significa que se informarmos um valor de maneira direta para ele, 
não irá funcionar.*/

$seeALL->bindParam(':nome', 'Josué');
$seeALL->bindParam(':email', 'N/A');
$seeALL->bindParam(':telefone', 'N/A');
$seeALL->bindParam(':endereço', 'N/A');
$seeALL->bindParam(':estado_id', 'N/A');
$seeALL->bindParam(':cidade_id', 'N/A');
$seeALL->bindParam(':observacoes', 'N/A');

$seeALL->execute();


### ATUALIZAR DADOS EM UMA TABELA

$id=1;
$nome = "";

$seeALL = $pdo->prepare('UPDATE '.$TABLE_USERS.' SET nome = :nome WHERE id = :id');

### SELECIONANDO DADOS EM UMA TABELA

### DELETAR DADOS EM UMA TABELA 

?>