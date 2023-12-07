<!--  excluir.php -->
<?php 
require_once '../Model/PagamentoDTO.php';
require_once '../Model/PagamentoDAO.php'; 
      
$pagamentoDTO = new PagamentoDTO();
$pagamentoDAO = new PagamentoDAO();
//  $array= $usuarioDAO->listarProfissional();    
echo $_GET['idPagamento'];

if (isset($_GET['idPagamento'])) {
   $idPagamento = $_GET['idPagamento'];	
 $array = $pagamentoDAO->excluirPagamento($idPagamento);

   if ($array==TRUE) {
       echo "excluído com sucesso";
          //header('Location:../Visao/listarUsuario.php');
   }else {
     echo "Erro";
}

   
}

?>
 


