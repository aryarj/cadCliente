<?php
require_once "../Controller/banco.php";

$id_categoria = $_REQUEST['id_categoria'];
$result_sub_cat="SELECT * FROM municipio WHERE idm=$id_categoria ORDER BY Nome";
$resultado_sub_cat=mysqli_query($conexao,$result_sub_cat);

while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
    $sub_categorias_post[] = array(
        'Id'	=> $row_sub_cat['Id'],
        'Nome' => ($row_sub_cat['Nome']),
    );
}

echo(json_encode($sub_categorias_post));