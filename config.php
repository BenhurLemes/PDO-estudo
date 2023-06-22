<?php 

function Conectar() {

    #Construção básica
    $local_serve = 'localhost';
    $usuario_serve = 'root'; #config XAMP
    $senha_serve = ''; #config XAMP
    $banco_de_dados = 'registro'; #banco de dados

    #Try e Cath para testar a conexão PDO
    try{
        $pdo = new PDO("mysql:host=$local_serve;dbname=$banco_de_dados", $usuario_serve, $senha_serve); #Conexão PDO
        $pdo->exec("SET CHARACTER SET utf8");
    } catch (\Exception $E) { #encontrará o erro no teste.
        var_dump($E->getMessage());
        die; #encerra o script (não deve continuar sem a instância do PDO)
    }

    return $pdo;
}

?>