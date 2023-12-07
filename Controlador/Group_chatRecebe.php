<?php  require_once "../Controlador/logica-usuario.php"; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../_cdn/boot.css">
    <link rel="stylesheet" href="../_cdn/fonticon.css">
    <link rel="stylesheet" href="../css/salas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/list_format copy.css">



    <title>Salas</title>
</head>

<body>
     <!--DOBRA CABEÇALHO-->

     <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img class="logo1" src="../img/logo.png" alt="Bem vindo ao projeto prático Html5 e Css3 Essentials"
                    title="Bem vindo ao projeto prático Html5 e Css3 Essentials"></a>
                    

            <nav class="main_header_content_menu">
                <ul>
                <?php if(usuarioEstaLogado()){  ?>
                                                        
                    <li><a href="../Controlador/Group_chatMediador.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo  $_SESSION["email"]; ?> </a></li>  </p>

                <?php  }   ?>
                   
                </ul>
            </nav>
        </div>
    </header>


<?php 



if (isset($_GET["publicar"])){
$publicar=$_GET["publicar"];
if($_SESSION["usuario_logado"]==3 && $publicar=="sim"){
       echo "
    <script>        
        alert('Esse fórum será publicado no perfil Profissional!!');
        setTimeout(function() {
            window.location.href = '../Controlador/Group_chatMediador.php ';
           
        }, 0000);
    </script>
";
}else{
 
   // echo "<br><br><h1 class='h1'><center>Esse fórum NÃO será publicado no perfil Profissional!</center></h1>";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "saudemental";
    $con = new mysqli($host, $user, $pass, $db_name);
    
    $query = "SELECT * FROM forum where idSala=1";
    $run = $con->query($query);
    while($row = $run->fetch_array()) {
        $publicar=$row['ativo'];
         ?>
          <div class="corpo">	
         <form action="alterarMensagem.php"  method=post>				
           
         <center><table align=center>
                <!-- <th>IdForum</th> -->
                <!-- <th>Uname</th> -->
                <th>Mensagem</th>
                <th>Ativos</th>
                <!-- <th>Datas</th> -->
                <!-- <th>IdSala</th> -->
                <th>Alterar</th>
                      <tr>
                          <td hidden ><input type=hidden value= <?php echo $row['idForum'];?> name=idForum> </td> 
                           
                           <td hidden><input type=hidden  value= <?php echo $row['uname'];?> name=uname> </td> 
                            <!-- <td>Mensagem </td> -->
                           <td><input type=text value= "<?php echo $row['mensagem'];?>" name=mensagem readonly> </td> 
                           <!-- <td>Ativo </td> -->
                           <td><input type=text value= <?php echo $row['ativo'];?> name=ativo> </td> 
                        
                           <td hidden ><input type=hidden value= <?php echo $row['data'];?> name=data> </td> 
                         
                           <td hidden <input type=hidden value= <?php echo $row['idSala'];?> name=idSala> </td> 
                            <td ><button>
                                    <img src='../img/editar_icon.png' width="20px" height="20px">
                            </button></td>
					 </tr> 
         
           </center>  
        </form>
        <?php
      echo "</table >";
       echo"</div>";
       ?>
   <?php }//fim do while
   
}//fim do if
}
?>


</body>
</html>