<!--  excluir.php -->
<?php 
require_once '../Model/ProfissionalDTO.php';
require_once '../Model/ProfissionalDAO.php'; 
      

$profissionalDTO = new ProfissionalDTO();
$profissionalDAO = new ProfissionalDAO();
//  $array= $profissionalDAO->listarProfissional();    
echo $_GET['idUsuario'];

if (isset($_GET['idUsuario'])) {
   $idUsuario = $_GET['idUsuario'];	
 $array = $profissionalDAO->excluirProfissional($idUsuario);

   if ($array==TRUE) {
       echo "excluído com sucesso";
          //header('Location:../Visao/listarProfissional.php');
   }else {
     echo "Erro";
}

   
}

?>
 


