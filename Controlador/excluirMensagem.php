<?php
require_once '../Model/MensagemDTO.php';
require_once '../Model/MensagemDAO.php';
require_once "../Controlador/logica-usuario.php"; 


// $idForum = $_POST['idForum'];

// $mensagemDTO = new MensagemDTO();
// $mensagemDTO->setIdForum($idForum);

// $mensagemDAO = new MensagemDAO();
// $mensagemDAO->excluirMensagem($mensagemDTO);

$mensagemDTO = new MensagemDTO();
$mensagemDAO = new MensagemDAO();
//  $array= $usuarioDAO->listarProfissional();    
echo $_GET['idForum'];

if (isset($_GET['idForum'])) {
  $idForum = $_GET['idForum'];	
 $array = $mensagemDAO-> excluirMensagem($idForum);

   if ($array==TRUE) {
       echo "excluído com sucesso";
          //header('Location:../Visao/listarForum.php');
   }else {
     echo "Erro";
}

   
}

?>














