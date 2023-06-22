<?php 

function Conectar(){

    #Construção básica
    $local_serve = 'localhost';
    $usuario_serve = 'root'; #config XAMP
    $senha_serve = ''; #config XAMP
    $banco_de_dados = 'registro'; #banco de dados

    #Try e Cath para testar a conexão PDO
    try{
        $pdo = new PDO("mysql:host=$local_serve;dbname=$banco_de_dados", $usuario_serve, $senha_serve); #Conexão PDO
        $pdo->exec("SET CHARACTER SET utf8");
    } catch (\Throwable $th) { #encontrará o erro no teste.
        return $th; #retorna o erro
        die; #encerra o script 
    }

    return $pdo;
}

?>