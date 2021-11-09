<?php
    require_once 'Model/logos.php';
    nomeEmpresa();
    echo '<br>';
        
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
    <link rel="stylesheet" href="assets/css/comum.css">

    <style>

      .carregando{
            color:#ff0000;
            display: none;
      }

      .erro{
			color: red;
			font-size: 20px
      }
          
    </style>

    <title>Cadastro de Clientes</title>
  </head>
  <body>
    <!--botão para ir para a página de listagem-->
     <div class="text-center">
        <a class="btn btn-warning" href="View/clientes.php" role="button">Para a tabela de clientes cadastrados</a>
     </div>
     
     <div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center">
        <h4 class="display-6">Prezado cliente, por favor, preencha o formulário a seguir</h4>
     </div>

<!--Entrada dos dados-->
<form method="POST">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" required name="nome" placeholder="nome completo">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label>CPF</label>
      <input type="text" class="form-control" id="cpf" maxlength="11" required name="cpf" placeholder="somente números">
      <!--<script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>-->
      <!-- mensagem de erro caso o campo não seja puramente numérico-->
      <?php if(isset($erros_validacao['cpf'])):?>
                    <span class="erro" >
        <?php echo $erros_validacao['cpf'];?>
                    </span>
        <?php endif;?><br><br>
    </div>
    <div class="form-group col-md-3">
      <label>RG</label>
      <input type="text" class="form-control" id="rg" required maxlength="9" name="rg" placeholder="somente números">
      <!--<input type="text" class="form-control" id="rg" required name="rg" placeholder="somente números">
      <script type="text/javascript">$("#rg").mask("00.000.000-0");</script>-->
      <!-- mensagem de erro caso o campo não seja puramente numérico-->
      <?php if(isset($erros_validacao['rg'])):?>
                    <span class="erro" >
        <?php echo $erros_validacao['rg'];?>
                    </span>
        <?php endif;?><br><br>

    </div>
    <div class="form-group col-md-3">
      <label>Telefone</label>
      <input type="text" class="form-control" id="telefone" name="telefone" maxlength="10" placeholder="DDD + número do telefone, somente números">
      <!--<input type="text" class="form-control" id="telefone" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" placeholder="DDD + número do telefone, somente números">
      <script type="text/javascript">$("#telefone").mask("(00) 0000-0000");</script>-->
      <!-- mensagem de erro caso o campo não seja puramente numérico-->
      <?php if(isset($erros_validacao['telefone'])):?>
                    <span class="erro" >
        <?php echo $erros_validacao['telefone'];?>
                    </span>
        <?php endif;?><br><br>

    </div>
    <div class="form-group col-md-3">
      <label>Celular</label>
      <input type="text" class="form-control" id="celular" required name="celular" maxlength="11" placeholder="DDD + número do celular, somente números">
      <!--<input type="text" class="form-control" id="celular" required name="celular" pattern="\([0-9]{2}\)[\s][0-9]{1}-[0-9]{4}-[0-9]{4}" placeholder="DDD + número do celular, somente números">
      <script type="text/javascript">$("#celular").mask("(00) 0-0000-0000");</script>-->
      <!-- mensagem de erro caso o campo não seja puramente numérico-->
            <?php if(isset($erros_validacao['celular'])):?>
                    <span class="erro" >
            <?php echo $erros_validacao['celular'];?>
                    </span>
            <?php endif;?><br><br>
    </div>
  </div>
  <div class="form-group">
    <label>Endereço </label>
    <input type="text" class="form-control" id="logradouro" required name="logradouro" placeholder="Rua, avenida, . . .">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label>Número</label>
      <input type="text" class="form-control" id="numero" required name="numero" placeholder="somente números">
      <!-- mensagem de erro caso o campo não seja puramente numérico-->
      <?php if(isset($erros_validacao['numero'])):?>
                    <span class="erro" >
            <?php echo $erros_validacao['numero'];?>
                    </span>
            <?php endif;?><br><br>

    </div>
    <div class="form-group col-md-3">
      <label>Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="casa A, Torre A . . . ">
    </div>
    <div class="form-group col-md-3">
      <label>Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro">
    </div>
    <div class="form-group col-md-3">
      <label>CEP</label>
      <input type="text" class="form-control" id="cep" required maxlength="8" name="cep" placeholder="somente números">
      <!--<script type="text/javascript">$("#cep").mask("00000-000");</script>-->
      <?php if(isset($erros_validacao['cep'])):?>
                    <span class="erro" >
            <?php echo $erros_validacao['cep'];?>
                    </span>
            <?php endif;?><br><br>
    </div>
  </div>
  <!--Selecionar o estado a partir do bando de dados-->
  <div class="form-row">
    <div class="form-group col-md-2">
        <label>Estado</label>
        <select name="id_categoria" id="id_categoria" class="form-control" required>
        <option value="">Escolha o estado</option>
            <?php
                $result_cat_post="SELECT * FROM estado ORDER BY Uf";
                $resultado_cat_post=mysqli_query($conexao,$result_cat_post);
                while($row_cat_post=mysqli_fetch_assoc($resultado_cat_post))
                {
                    echo '<option value="'.$row_cat_post['Id'].'">'.$row_cat_post['Uf'].'</option>';
                }
            ?>
        </select>
    </div>
    <!--Selecionar a cidade a partir da seleção do estado no bando de dados utilizando
     o código Java Script após o form-->
    <div class="form-group col-md-5">
      <label>Cidade</label>
      <span class="carregando">Aguarde, carregando . . .</span>
      <select name="id_sub_categoria" id="id_sub_categoria" class="form-control" required name="cidade">
        <option value="">Selecione</option>
      </select>
      
    </div>
    <div class="form-group col-md-5">
      <label>Email</label>
      <input type="email" class="form-control" id="email" required name="email">
    </div>

  </div>
  <!-- Boão de limpeza dos dados no formulário -->
  <button type="button" class="btn btn-danger"><a href="Controller/zerar.php">Limpar</a></button>  
  <!-- Boão para cadastrar as informações -->                    
  <button class="btn btn-primary" type="submit" style="float: right;">Cadastrar</button>
  
  
</form>  

    <!-- JavaScript (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
        <!-- JavaScript para o encadeamento estado/cidade -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">
		      $(function(){
		      	$('#id_categoria').change(function(){
		      		if( $(this).val() ) {
		      			$('#id_sub_categoria').hide();
		      			$('.carregando').show();
		      			$.getJSON('Model/sub_categorias_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
		      				var options = '<option value="">Escolha a subcategoria/cidade</option>';	
		      				for (var i = 0; i < j.length; i++) {
		      					options += '<option value="' + j[i].Id + '">' + j[i].Nome + '</option>';
		      				}	
		      				$('#id_sub_categoria').html(options).show();
		      				$('.carregando').hide();
		      			});
		      		} else {
		      			$('#id_sub_categoria').html('<option value="">– Escolha a subcategoria/cidade –</option>');
		      		}
		      	});
		      });
    </script>
    <?php
          //tradução do código do estado e do município pelos seus nomes
          $estado1="SELECT Uf FROM estado WHERE Id=$estado";
          $estado2=mysqli_query($conexao,$estado1);
          $estado3 = mysqli_fetch_assoc($estado2);

          $cidade1="SELECT Nome FROM municipio WHERE Id=$cidade";
          $cidade2=mysqli_query($conexao,$cidade1);
          $cidade3 = mysqli_fetch_assoc($cidade2);

          //Gravando as informações na tabela 'cliente'
          if($contador==6)//contador dos campos numéricos
          {
            $sqlGravar="INSERT INTO cliente(nome, cpf, rg, tel, celular, email, cidade, estado, logra, numero, comple, bairro, cep) 
            VALUES ('$nome','$cpf','$rg','$telefone','$celular','$email','".$cidade3["Nome"]."','".$estado3["Uf"]."','$logradouro',
            '$numero','$complemento','$bairro','$cep')";
            if(mysqli_query($conexao, $sqlGravar))
            {
              echo "<script language='javascript' type='text/javascript'>
              alert('Registro gravado com sucesso!');
              </script>";
            }else
            {
                echo "Error: " . $sqlGravar . "<br>" . mysqli_error($conexao);
            }
            mysqli_close($conexao);
          } 

    ?>


  </body>
</html>