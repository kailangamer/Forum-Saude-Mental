<?php
require_once '../Model/UsuarioDTO.php';
require_once '../Model/UsuarioDAO.php';

$apelido = $_POST['apelido'];
$email= $_POST['email'];
//$senha = $_POST['senha'];
$senha = md5($_POST['senha']);

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setApelido($apelido);
$usuarioDTO->setEmail($email);
$usuarioDTO->setSenha($senha);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->salvar($usuarioDTO);

?>



























