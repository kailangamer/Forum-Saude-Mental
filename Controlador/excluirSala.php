<!--  excluir.php -->
<?php 
require_once '../Model/SalaDTO.php';
require_once '../Model/SalaDAO.php'; 
      

//$profissionalDTO = new ProfissionalDTO();
//$profissionalDAO = new ProfissionalDAO();
//$array= $profissionalDAO->listarProfissional();  



//if (isset($_GET['idSala'])) {
  $idSala = $_GET['idSala'];	

  $pdo = Conexao::getInstance();

  try{  
      $sql = "DELETE FROM sala WHERE idSala= $idSala";
      $stmt = $pdo->prepare($sql);
      echo "
          <script>        
                alert('Sala excluída com sucesso!');
                setTimeout(function() {
                  window.location.href = '../Visao/listarSala.php';
              }, 0000);
          </script>
      ";
      return $stmt->execute();

  } catch (PDOException $exc) {
      echo $exc->getMessage();
  }


?>