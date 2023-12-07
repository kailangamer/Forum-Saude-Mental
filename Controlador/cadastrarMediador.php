<?php
require_once '../Model/MediadorDTO.php';
require_once '../Model/MediadorDAO.php';


$nome= $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$cep= $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$uf = $_POST['uf'];

$mediadorDTO = new MediadorDTO();

$mediadorDTO->setNome($nome);
$mediadorDTO->setEmail($email);
$mediadorDTO->setSenha($senha);
$mediadorDTO->setCPF($cpf);
$mediadorDTO->setCNPJ($cnpj);
$mediadorDTO->setTelefone($telefone);
$mediadorDTO->setCEP($cep);
$mediadorDTO->setLogradouro($logradouro);
$mediadorDTO->setNumero($numero);
$mediadorDTO->setComplemento($complemento);
$mediadorDTO->setBairro($bairro);
$mediadorDTO->setCidade($cidade);
$mediadorDTO->setUF($uf);


$mediadorDAO = new MediadorDAO();
$mediadorDAO->salvar($mediadorDTO);

?>
















