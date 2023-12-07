<?php
require_once '../Model/AssinaturaDTO.php';
require_once '../Model/AssinaturaDAO.php';

$nomedt = $_POST['nomedt'];
$valorTotal = $_POST['valorTotal'];

$assinaturaDTO = new AssinaturaDTO();

$assinaturaDTO->setNomedt($nomedt);
$assinaturaDTO->setValorTotal($valorTotal);

$assinaturaDAO = new PagamentoDAO();
$assinaturaDAO->salvar($assinaturaDTO);

?>
