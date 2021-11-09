<?php
   require_once "../Controller/banco.php";
   require_once '../Model/logos.php';
   nomeEmpresa();
   echo '<br>';

   //Carregando os dados do clientes para apagar
   $id = $_GET['id'];
   $sqlCliente="SELECT * FROM cliente WHERE id=$id";
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
    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!--css-->
    <link rel="stylesheet" href="../assets/css/comum.css">

    

    <title>Apagar o cadastro?</title>
    </head>
    <body>
    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6">Você tem certeza que deseja apagar esse cadastro?</h4>
    </div><br>

    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center">
        <a href="clientes.php">Não, voltar para a tabela de clientes cadastrados</a>';
        &nbsp;&nbsp;
        <a href="../Controller/apagar.php?id=<?php echo $id?>">Sim, apagar</a>';
    </div><br><br>
    
    <!--Mostrando o registro que será apagado-->
<!--<table class="table" id="datatable">-->
    <table class="table">
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
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php while($dados1 = mysqli_fetch_array($dados)):
              $id=$dados1['id']?>
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
          </tr>
          <?php echo '<br>';
            endwhile; ?>
        </tbody>
    </table>



        <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </boby>