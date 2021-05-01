<?php 
session_start();
include "../conexaoBD/conexao.php";

$id = $_GET['id'] ?? '';

$result_delete = "DELETE FROM atendimento WHERE id = '$id'";

$resultado = mysqli_query($conexao, $result_delete );

if($result_delete == true){

    header('Location: relatorios.php');
    exit;
}else{
    echo'FATAL ERRO!!!';
}

?> 