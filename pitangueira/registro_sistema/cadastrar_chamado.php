<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Chamados</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../login/css/bulma.min.css" />
    
</head>
 
<body>
    <div class="container">
        <h3 class="title has-text-grey">Cadastre seu chamado</h3>
        <form action="cadastrar_script.php" method="POST">
            <div class="field">
                <div class="control">
                    <label for="dt_execucao">Data da Execução</label>
                    <input name="dt_execucao" type="date" class="input is-large" autofocus>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="tp_atendimento">Tipo do Atendimento</label>
                    <input name="tp_atendimento" type="text" class="input is-large">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="cliente">Cliente que foi Atendido</label>
                    <input name="cliente" class="input is-large" type="text">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="observacao">Observação</label>
                    <input name="observacao" class="input is-large" type="text">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="tecnico">Técnico que Realizou o Atendimento</label>
                    <input name="tecnico" class="input is-large" type="text">
                </div>
            </div>
                <button type="submit" class="button is-link">Salvar</button>
                <a href="../home.php" class="button is-primary">Voltar</a> 
        </form>
        
    </div>

</body>
 
</html>