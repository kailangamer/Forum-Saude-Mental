
  <?php
      $host = "localhost";
	  $user = "root";
	  $pass = "";
	  $db_name = "saudemental";
	  $con = new mysqli($host, $user, $pass, $db_name);
	  
     $mensagem=$_POST['mensagem'];
	 $ativo=$_POST['ativo'];
	 $idForum=$_POST['idForum'];

	$sql = "UPDATE forum SET  mensagem= '$mensagem', 
							    ativo=  '$ativo'
							 WHERE idForum =$idForum";
			 
	$resultado= mysqli_query($con,$sql);



	if($resultado){
		echo "
			<script>        
				alert('MENSAGEM ALTERADA!');
				setTimeout(function() {
					window.location.href = '../Controlador/Group_chatMediadorNutricionista.php ';
				}, 0000);
			</script>
		";
		
		
	}else{
		echo "Erro, tente novamente!";
	}
 
  ?>
  
 
  