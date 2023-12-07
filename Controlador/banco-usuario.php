<?php 

 function buscaUsuario($conexao,$email,$senha){

    $login=mysqli_real_escape_string($conexao,$email); 
     //  $sql="select * from usuario where email='$email' and senha=MD5('$senha') ";
	 //$sql="select * from usuario where email='$email' and senha='202cb962' ";
     //  $sql="select * from usuario where email='$email' and senha='$senha' ";
	 //$sql="select * from usuario where email='$email' and senha=md5($senha) ";  


	//$senha1 = $senha;
    //$scodif = md5($senha1);
	

	$senha3 = md5($senha);

  echo $senha3;

     $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha3' ";


	$resultado=mysqli_query($conexao, $sql);
	$usuario= mysqli_fetch_assoc($resultado);
	
	return $usuario;
} 
?>


