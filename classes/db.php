<?php
    require_once('config.php');
    # Tenta conectar ao banco de dados 
    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        #caso nao conecte ele mostra o erro
        echo 'Erro ao conectar ao banco de dados';
    }

?>