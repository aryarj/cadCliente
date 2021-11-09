<?php

class Cadastro
{
    //Atributos
    private $nome;
    private $cpf;
    private $rg;
    private $telefone;
    private $celular;
    private $email;
    private $estado;
    private $cidade;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;
    
    //Métodos
    // Nenhum método nesse caso
    
    //Getters
    function getNome()
    {
        return $this->nome;
    }
    function getCpf()
    {
        return $this->cpf;
    }
    function getRg()
    {
        return $this->rg;
    }
    function getTelefone()
    {
        return $this->telefone;
    }
    function getCelular()
    {
        return $this->celular;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getEstado()
    {
        return $this->estado;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function getLogradouro()
    {
        return $this->logradouro;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function getComplemento()
    {
        return $this->complemento;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function getCep()
    {
        return $this->cep;
    }
    

    //Setters
    function setNome($nome)
    {
        $this->nome=$nome;
    }
    function setCpf($cpf)
    {
        $this->cpf=$cpf;
    }
    function setRg($rg)
    {
        $this->rg=$rg;
    }
    function setTelefone($telefone)
    {
        $this->telefone=$telefone;
    }
    function setCelular($celular)
    {
        $this->celular=$celular;
    }
    function setEmail($email)
    {
        $this->email=$email;
    }
    function setEstado($estado)
    {
        $this->estado=$estado;
    }
    function setCidade($cidade)
    {
        $this->cidade=$cidade;
    }
    function setLogradouro($logradouro)
    {
        $this->logradouro=$logradouro;
    }
    function setNumero($numero)
    {
        $this->numero=$numero;
    }
    function setComplemento($complemento)
    {
        $this->complemento=$complemento;
    }
    function setBairro($bairro)
    {
        $this->bairro=$bairro;
    }
    function setCep($cep)
    {
        $this->cep=$cep;
    }
}