<?php
require_once "banco.php";
require_once "Model/Cadastro.php";

//estipulando valores iniciais
$cadastro=array('nome'=>0,
                'cpf'=>0,
                'rg'=>0,
                'telefone'=>0,
                'celular'=>0,
                'email'=>0,
                'id_categoria'=>0,
                'id_sub_categoria'=>0,
                'logradouro'=>0,
                'numero'=>0,
                'complemento'=>0,
                'bairro'=>0,
                'cep'=>0
                );

    // vetor para os erros    
    $erros_validacao=array();

    // variáveis de confirmação para os requisitos que devem ser somente números
    $confCpf=false;
    $confRg=false;
    $confTelefone=false;
    $confCelular=false;
    $confNumero=false;
    $confCep=false;

    //contador de itens para os requisitos que devem ser somente números
    $contador=0;

    // Chamada das classes
    $itens = new Cadastro;//OO

    // retenção dos dados com método 'POST'
    // quando há entrada do nome do cliente
if (isset($_POST['nome']) && $_POST['nome'] != '')
{
    $cadastro=array();

    // Dados dos clientes
    //Nome
    $itens->setNome($_POST['nome']);//OO
    $nome=$itens->getNome();//OO
    $cadastro['nome']=$nome;
    
    //conferindo se o campo tem somente numeros
    if (isset($_POST['cpf']) && ($_POST['cpf'])!=0 && is_numeric($_POST['cpf'])){
        $itens->setCpf($_POST['cpf']);//OO
        $cpf=$itens->getCpf();//OO
        $cadastro['cpf']=$cpf;
        $confCpf=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['cpf']='Digitar somente números!';
    }

    if (isset($_POST['rg']) && ($_POST['rg'])!=0 && is_numeric($_POST['rg'])){
        $itens->setRg($_POST['rg']);//OO
        $rg=$itens->getRg();//OO
        $cadastro['rg']=$rg;
        $confRg=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['rg']='Digitar somente números!';
    }

    if (isset($_POST['telefone']) && ($_POST['telefone'])!=0 && is_numeric($_POST['telefone'])){
        $itens->setTelefone($_POST['telefone']);//OO
        $telefone=$itens->getTelefone();//OO
        $cadastro['telefone']=$telefone;
        $confTelefone=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['telefone']='Digitar somente números!';
    }

    if (isset($_POST['celular']) && ($_POST['celular'])!=0 && is_numeric($_POST['celular'])){
        $itens->setCelular($_POST['celular']);//OO
        $celular=$itens->getCelular();//OO
        $cadastro['celular']=$celular;
        $confCelular=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['celular']='Digitar somente números!';
    }
    
    $itens->setEmail($_POST['email']);//OO
    $email=$itens->getEmail();//OO
    $cadastro['email']=$email;

    $itens->setEstado($_POST['id_categoria']);//OO
    $estado=$itens->getEstado();//OO
    $cadastro['id_categoria']=$estado;

    $itens->setCidade($_POST['id_sub_categoria']);//OO
    $cidade=$itens->getCidade();//OO
    $cadastro['id_sub_categoria']=$cidade;

    $itens->setLogradouro($_POST['logradouro']);//OO
    $logradouro=$itens->getLogradouro();//OO
    $cadastro['logradouro']=$logradouro;

    if (isset($_POST['numero']) && ($_POST['numero'])!=0 && is_numeric($_POST['numero'])){
        $itens->setNumero($_POST['numero']);//OO
        $numero=$itens->getNumero();//OO
        $cadastro['numero']=$numero;
        $confNumero=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['numero']='Digitar somente números!';
    }
    
    $itens->setComplemento($_POST['complemento']);//OO
    $complemento=$itens->getComplemento();//OO
    $cadastro['complemento']=$complemento;

    $itens->setBairro($_POST['bairro']);//OO
    $bairro=$itens->getBairro();//OO
    $cadastro['bairro']=$_POST['bairro'];

    if (isset($_POST['cep']) && ($_POST['cep'])!=0 && is_numeric($_POST['cep'])){
        $itens->setCep($_POST['cep']);//OO
        $cep=$itens->getCep();//OO
        $cadastro['cep']=$_POST['cep'];
        $confCep=true;
        $contador+=1;
    }
    else
    {        
        $erros_validacao['cep']='Digitar somente números!';
    }
    
}

require_once "entrada2.php";
    