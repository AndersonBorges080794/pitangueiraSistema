<?php

    //Variáveis para conexão do sistema para o BD.
    define('server','localhost');
    define('user','root');
    define('password','');
    define('db','pitangueira');

    //Instrução para conectar o sistema com o BD.
    $conexao = mysqli_connect(server, user, password, db) or die('Não foi possivél Conectar');

 

?>