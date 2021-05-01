<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />

    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php 
                include "../conexaoBD/conexao.php";

                /*Recebendo os dados da tag form do arquivo editar.php */
                $id = $_POST['id'];
                $dt_execucao = $_POST['dt_execucao'];
                $tp_atendimento = $_POST['tp_atendimento'];
                $cliente = $_POST['cliente'];
                $observacao = $_POST['observacao'];
                $tecnico = $_POST['tecnico'];

                
                /*Instrução de atualização dos dados */
                $sql = "UPDATE `atendimento` SET `dt_execucao`='$dt_execucao',
                `tp_atendimento`='$tp_atendimento',`cliente`='$cliente',`observacao`='$observacao',
                `tecnico`='$tecnico' WHERE id = $id";


                /*Função que vai passar os dados para o BD */
                 if(mysqli_query($conexao,$sql)){
                    header('Location: relatorios.php');
                    exit;
                 }else{
                    echo'Dados Alterados com sucesso';
                 }

                 
            ?>
            
            <a href='chamados.php'><button class='btn btn-primary'>Voltar</button></a> 
        </div>
    </div>
    
    


  </body>
</html>