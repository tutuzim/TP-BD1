<?php
    $hostname="localhost";
    $username="root";
    $password="kimera";
    $database="LojaApp";
    $port=3308;
    $socket="C:/xampp/mysql/mysql.sock";

    $conexao = mysqli_connect($hostname,$username,$password,$database);

    if(!$conexao){
        die("Ocorreu um erro com o localhost");
    }

    $banco = mysqli_select_db($conexao,$database);

    if(!$banco){
        die("Ocorreu um erro com o banco");
    }


?>