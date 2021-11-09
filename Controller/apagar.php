<?php
    require_once("banco.php");
       
     $id = $_GET['id'];
     

    // marcando um registro para ser apagado/ocultado
   $sql = "DELETE FROM `cliente` WHERE id =$id";
   if(mysqli_query($conexao,$sql)){
       echo "<script language='javascript' type='text/javascript'>
       alert('Registro apagado com sucesso!');
       window.location.href='../View/clientes.php';
       </script>";
   }else{
       echo "<script language='javascript' type='text/javascript'>
       alert('Registro não apagado!');
       window.location.href='../View/clientes.php';
       </script>";
   }
   mysqli_close($conexao);
?>