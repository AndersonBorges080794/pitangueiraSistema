<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    
</head>
 
<body>
<?php 
        include "../conexaoBD/conexao.php";
        
        $id = $_GET['id'] ?? '';
        $sql = "SELECT *FROM atendimento WHERE id = $id";

        $dados = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_assoc($dados);
    
    
    ?>
    <div class="container">
        <h3 class="title has-text-grey">Alterar Dados</h3>
        <form action="editar_script.php" method="POST">
            <div class="field">
                <div class="control">
                    <label for="dt_execucao">Data da Execução</label>
                    <input name="dt_execucao" type="date" class="input is-large" value="<?php echo $linha['dt_execucao']; ?>" autofocus>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="tp_atendimento">Tipo do Atendimento</label>
                    <input name="tp_atendimento" type="text" class="input is-large" value="<?php echo $linha['tp_atendimento']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="cliente">Cliente que foi Atendido</label>
                    <input name="cliente" class="input is-large" type="text" value="<?php echo $linha['cliente']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="observacao">Observação</label>
                    <input name="observacao" class="input is-large" value="<?php echo $linha['observacao']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="tecnico">Técnico que Realizou o Atendimento</label>
                    <input name="tecnico" class="input is-large" type="text" value="<?php echo $linha['tecnico']; ?>">
                </div>
            </div>
                <button type="submit" class="button is-success">Salvar</button>
                <a href="relatorios.php" class="button is-info">Voltar</a>
                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
        </form>
    </div>

</body>
 
</html>