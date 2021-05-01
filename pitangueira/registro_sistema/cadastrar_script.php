<?php
session_start();
include "..\conexaoBD\conexao.php";

    /*Recebendo os dados da tag form do arquivo cadastrar_chamado.php */
    $dt_execucao = $_POST['dt_execucao'];
    $tp_atendimento = $_POST['tp_atendimento'];
    $cliente = $_POST['cliente'];
    $observacao = $_POST['observacao'];
    $tecnico = $_POST['tecnico'];

                
    /*Instrução de inserção dos dados */
    $sql = "INSERT INTO `atendimento`( `dt_execucao`, 
    `tp_atendimento`, `cliente`, `observacao`, `tecnico`) 
    VALUES ('$dt_execucao','$tp_atendimento','$cliente','$observacao',
    '$tecnico')";

    /*Função que vai passar os dados para o BD */
    if(mysqli_query($conexao,$sql)){
        header('Location: ../home.php');
        exit;
    }else{
        echo'Chamado não foi registrado!!';
    }
?>