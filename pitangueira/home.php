<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-danger">Home</h3>  
                    
                    <a href="registro_sistema/cadastrar_chamado.php" class='button is-success'>Registrar um Chamado</a>
                    <a href="registro_sistema/relatorios.php" class='button is-link'>Relatórios</a>
                    <a href="login/logout.php" class='button is-danger'>Sair</a>
                    
                </div>
            </div>
        </div>
    </section>
</body>

</html>