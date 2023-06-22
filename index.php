<?php 

include("config.php");

$pdo = Conectar();

$TABELA = 'users'; #definir a tabela


/* PROCURANDO DADOS EM UMA TABELA */

$id = 2;
$stmt = $pdo->prepare('SELECT * FROM '.$TABELA.' WHERE id = :id'); # o :id o parâmetro ficará em aberto para o uso
$stmt->execute(array('id' => $id)); #vetor nominal

$resultado = $stmt->fetchAll(); # Retorna um array com todas as linhas da consulta, ideal para uma busca por nome ou por endereço. 

foreach ($resultado as $key) {
    var_dump($key); #exibe informações organizadas, mostrando o seu tipo e valor.
}


/* INSERÇÃO DE DADOS EM UMA TABELA */

/* ATUALIZAR DADOS EM UMA TABELA */

/* SELECIONANDO DADOS EM UMA TABELA */

/* DELETAR DADOS EM UMA TABELA */

?>