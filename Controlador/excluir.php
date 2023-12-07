<!--  excluir.php -->
<?php 
require_once '../Model/UsuarioDTO.php';
require_once '../Model/UsuarioDAO.php'; 
      

$usuarioDTO = new UsuarioDTO();
$usuarioDAO = new UsuarioDAO();
//  $array= $usuarioDAO->listarProfissional();    
echo $_GET['idUsuario'];

if (isset($_GET['idUsuario'])) {
  $idUsuario = $_GET['idUsuario'];	
 $array = $usuarioDAO->excluirUsuario($idUsuario);

   if ($array==TRUE) {
       echo "excluído com sucesso";
          //header('Location:../Visao/listarUsuario.php');
   }else {
     echo "Erro";
}

   
}

?>
 


