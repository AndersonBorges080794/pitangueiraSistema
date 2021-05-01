<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />
    
  

    <title>Relatórios</title>
  </head>
  <body>
    
    <?php 
        include "../conexaoBD/conexao.php";
        
        
        $busca = $_POST['busca'] ?? '';

        
        //Atribuição de pesquisa no BD para a variável $sql
        $sql = "SELECT * FROM atendimento WHERE cliente LIKE '%$busca%'";


        //função que vai receber os dados do BD
        $dados = mysqli_query($conexao, $sql);

    ?>

    <?php 
    
        /*Função para inverter a data de execução */
        function mostraData($data){
          $d = explode('-', $data);
          $escreve = "$d[2]/$d[1]/$d[0]";
  
          return $escreve;
      }
    
    
    ?>
    
    <div class="container">
        <div class="">
            <div class=""> 
                <h1>Relatório</h1>
                <nav>
                    <form action="relatorios.php" method="POST">
                        <input class="input is-success input is-normal" type="search" 
                        placeholder="Pesquise aqui..." aria-label="Search" name="busca" autofocus>
                        <button class="button is-link" 
                        type="submit">Pesquisar</button>
                    </form>
                </nav>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id do atendimento</th>
                      <th>Cliente</th>
                      <th>Técnico</th>
                      <th>Tipo do Atendimento</th>
                      <th>Data da Execução</th>  
                      <th>Observação</th>
                      <th>Funções</th>                        
                    </tr>
                  </thead>

                  <tbody>
                  <?php 
                    /*Função para pecorrer todo o array no BD*/ 
                    while( $linha = mysqli_fetch_assoc($dados) ){
                    $idAtendimento = $linha['id'];
                    $dt_execucao = $linha['dt_execucao'];
                    $dt_execucao = mostraData($dt_execucao);
                    $tp_atendimento = $linha['tp_atendimento'];
                    $cliente = $linha['cliente'];
                    $observacao = $linha['observacao'];
                    $tecnico = $linha['tecnico'];


                    /*Aqui vai exibir os dados recuperados do BD
                    e organizar na tabela.
                    */
                    echo "<tr>
                            <td scope = 'row'>$idAtendimento</td>
                            <td scope = 'row'>$cliente</td>
                            <td scope = 'row'>$tecnico</td>
                            <td scope = 'row'>$tp_atendimento</td>
                            <td scope = 'row'>$dt_execucao</td>                            
                            <td scope = 'row'>$observacao</td>          
                            <td scope = 'row' width = '170px'>
                                <a href='editar.php?id=$idAtendimento' class='button is-success'>Editar</a>
                                <a href='excluir.php?id=$idAtendimento' class='button is-danger'>Excluir</a>
                            </td>
                        </tr>";
                    }                        
                                        
                  ?>
                  </tbody>
                </table>
                <a href="../home.php" class="button is-info">Voltar</a>
            
            </div> 
        </div>
    </div>
    
    
  </body>
</html>