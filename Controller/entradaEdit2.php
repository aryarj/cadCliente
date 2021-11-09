<?php

//atribuindo os valores às variáveis do PHP
// e verificando se as variavais puramente numéricas estão corretas

$nome=$cadastro['nome'];

if($confCpf)
{
    $cpf=$cadastro['cpf'];
}else
{
    $cpf='sem informação';
}

if($confRg)
{
    $rg=$cadastro['rg'];
}else
{
    $rg='sem informação';
}

if($confTelefone)
{
    
}else
{
    $telefone='sem informação';
}

if($confCelular)
{
    $celular=$cadastro['celular'];
}else
{
    $celular='sem informação';
}

$email=$cadastro['email'];
$estado=$cadastro['id_categoria'];
$cidade=$cadastro['id_sub_categoria'];
$logradouro=$cadastro['logradouro'];

if($confNumero)
{
    $numero=$cadastro['numero'];
}else
{
    $numero='sem informação';
}

$complemento=$cadastro['complemento'];
$bairro=$cadastro['bairro'];

if($confCep)
{
    $cep=$cadastro['cep'];
}else
{
    $cep='sem informação';
}

require_once "../View/formularioEdit.php";