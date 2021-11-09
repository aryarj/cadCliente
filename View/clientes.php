<?php
   require_once "../Controller/banco.php";
   require_once '../Model/logos.php';
   nomeEmpresa();
   echo '<br>';

   //Carregando os dados dos clientes
   $sqlCliente="SELECT * FROM cliente ORDER BY id DESC";
   $dados = mysqli_query($conexao,$sqlCliente) or die(mysqli_error($conexao));
    
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="../assets/css/comum.css">
    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--css para o plugin css datable-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    
    <title>Clientes</title>
  </head>
  <body>

    <div class="text-center">
        <a class="btn btn-warning" href="../index.php" role="button">Para a tela de cadastro</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6">Tabela de clientes cadastrados</h4>
     </div>
    
    <table class="display" id="datatable">
        <thead>
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Logradouro</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php while($dados1 = mysqli_fetch_array($dados)):
              $id=$dados1['id'];?>
            <td><?php echo $dados1['nome'];?></td>
            <td><?php echo $dados1['cpf'];?></td>
            <td><?php echo $dados1['rg'];?></td>
            <td><?php echo $dados1['tel'];?></td>
            <td><?php echo $dados1['celular'];?></td>
            <td><?php echo $dados1['email'];?></td>
            <td><?php echo $dados1['logra'];?></td>
            <td><?php echo $dados1['numero'];?></td>
            <td><?php echo $dados1['comple'];?></td>
            <td><?php echo $dados1['bairro'];?></td>
            <td><?php echo $dados1['cidade'];?></td>
            <td><?php echo $dados1['estado'];?></td>
            <td><?php echo $dados1['cep'];?></td>
            <td><a href="../Controller/entradaEdit.php?id=<?php echo $id?>">Editar</a></td>
            <td><a href="apagarPergunta.php?id=<?php echo $id?>">Apagar</a></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
    </table>
        <br><br><br>
    <!-- JavaScript (Opcional)-->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
    <!--js para o plug in js datable -->
    <script type="text/javascript" src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!--função em javas cript para aplicar as formatações-->
    <script type="text/javascript">
        $('#datatable').DataTable();
    </script>
</html>