<!--  excluir.php -->
<?php 
require_once '../Model/MediadorDTO.php';
require_once '../Model/MediadorDAO.php'; 
      

$mediadorDTO = new MediadorDTO();
$mediadorDAO = new MediadorDAO();
//  $array= $profissionalDAO->listarProfissional();    
echo $_GET['idUsuario'];

if (isset($_GET['idUsuario'])) {
   $idUsuario = $_GET['idUsuario'];	
 $array = $mediadorDAO->excluirMediador($idUsuario);

   if ($array==TRUE) {
       echo "excluído com sucesso";
          //header('Location:../Visao/listarMediador.php');
   }else {
     echo "Erro";
}

   
}

?>
 


