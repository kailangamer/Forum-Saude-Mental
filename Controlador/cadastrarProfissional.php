<?php
require_once '../Model/ProfissionalDTO.php';
require_once '../Model/ProfissionalDAO.php';


$nome= $_POST['nome'];
$registro= $_POST['registro'];
$email = $_POST['email'];
$senha = md5 ($_POST['senha']);
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
$TipoProfissional = $_POST['TipoProfissional'];


$profissionalDTO = new ProfissionalDTO();

// $profissionalDTO->setApelido($apelido);
$profissionalDTO->setNome($nome);
$profissionalDTO->setRegistro($registro);
$profissionalDTO->setEmail($email);
$profissionalDTO->setSenha($senha);
$profissionalDTO->setCPF($cpf);
$profissionalDTO->setCNPJ($cnpj);
$profissionalDTO->setTelefone($telefone);
$profissionalDTO->setCEP($cep);
$profissionalDTO->setLogradouro($logradouro);
$profissionalDTO->setNumero($numero);
$profissionalDTO->setComplemento($complemento);
$profissionalDTO->setBairro($bairro);
$profissionalDTO->setCidade($cidade);
$profissionalDTO->setUF($uf);
$profissionalDTO->setTipoProfissional($TipoProfissional);


$profissionalDAO = new ProfissionalDAO();
$profissionalDAO->salvar($profissionalDTO);

?>














