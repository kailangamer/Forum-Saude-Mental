<?php
require_once "logica-usuario.php"; 
require_once '../Model/UsuarioDTO.php';
require_once '../Model/UsuarioDAO.php'; 

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "saudemental";
$con = new mysqli($host, $user, $pass, $db_name);

$idSala=$_POST['idSala'];
$nome=$_POST['nome'];


$sql = "UPDATE sala SET  nome= '$nome'                     
                       WHERE idSala =$idSala";
       
$resultado= mysqli_query($con,$sql);



if($resultado){
  echo "
      <script>        
          alert('SALA ALTERADA!');
          setTimeout(function() {
              window.location.href = '../Visao/listarSala.php ';
          }, 0000);
      </script>
  ";
  
  
}else{
  echo "Erro, tente novamente!";
}

?>


