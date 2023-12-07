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
    <link rel="stylesheet" href="../css/chat.css">


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
                                                        
                    <li><a href="../Visao/salas.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo  $_SESSION["email"]; ?> </a></li>  </p>

                <?php  }   ?>
                   
                </ul>
            </nav>
        </div>
    </header>


<?php 
$_SESSION["usuario_logado"]; 
if($_SESSION["usuario_logado"]==3){
?> 
<div>
   <form action="Group_chatRecebeTerapeuta.php" method=GET>

   
<?php }?>


<?php


if (isset($_GET["publicar"])){
$publicar=$_GET["publicar"];
if($_SESSION["usuario_logado"]==3 && $publicar=="sim"){
    publicar();
    echo "<h1><center>Esse fórum será publicado!</center></h1>"; 
    // $_SESSION["publicar"]=="sim";
  

   
}else{
    echo "<h1><center>Esse fórum NÃO será publicado!</center></h1>";
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db_name = "saudemental";
            $con = new mysqli($host, $user, $pass, $db_name);
            
            $query = "SELECT * FROM forum where idSala=4";
            $run = $con->query($query);
            while($row = $run->fetch_array()) {
                $publicar=$row['ativo'];
                 ?><form action="alterarForm.php"  method=post>				
					<table >
							  <tr>
								   <td><input type=text value= <?php echo $row['ativo'];?> name=ativo> </td> 
							  </tr>
							  <tr>
								   <td>Nome </td>
								   <td> <input type=text value= <?php //echo $array['nome'];?> name=nome> </td>
							  </tr>
                    </table >	
					</form>
           <?php }//fim do while
        }//fim do if
    }//fim do if da página 78
?>



<?php

if (isset($_POST['submit'])){
$link = mysqli_connect("localhost","root", "", "saudemental");
  
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  
// Escape user inputs for security
$un= mysqli_real_escape_string($link, $_REQUEST['uname']);
$m = mysqli_real_escape_string($link, $_REQUEST['msg']);
      date_default_timezone_set('America/Sao_Paulo');
$ts=date('y-m-d h:ia');
  
// Attempt insert query execution
$sql = "INSERT INTO forum (uname, mensagem, ativo, idSala, data)VALUES ('$un','$m','NAO','1', '$ts')";
if(mysqli_query($link, $sql)){
} else{
    echo "ERROR: Mensagem não enviada!!!";
}
 // Close connection
mysqli_close($link);
}
?>

<html>
<head>
<body onload="show_func()">
<br>
<div id="container">
    <main>
        <header>
            <img src="logo_preta_sem_fundo.png" alt="">
            <div>
                <h2>TERAPEUTA</h2>
            </div>
            <img src="logo_preta_sem_fundo.png" alt="">
        </header>
 
<script>
function show_func(){
 
 var element = document.getElementById("chathist");
    element.scrollTop = element.scrollHeight;
  
 }
 </script>
  
<form id="myform" action="Group_chat.php" method="POST" >
<div class="inner_div" id="chathist">
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "saudemental";
$con = new mysqli($host, $user, $pass, $db_name);
 
$query = "SELECT * FROM forum where idSala=4";
 $run = $con->query($query);
 $i=0;
  
 while($row = $run->fetch_array()) :
 if($i==0){
 $i=5;
 $first=$row;
 ?>
 <div id="triangle1" class="triangle1"></div>
 <div id="message1" class="message1">
 <span style="color:white;float:right;">
 <?php echo $row['mensagem']; ?></span> <br/>
 <div>
   <span style="color:black;float:left; font-size:15px;clear:both;">
        <?php echo $row['uname']; ?>
         <?php //echo $row['data']; ?> 
        <?php $hoje=date('d/m/Y'); echo  $hoje; ?> 
   </span>
</div>
</div>
<br/><br/>
 <?php
 }
else
{
if($row['uname']!=$first['uname']){
?>
 <div id="triangle" class="triangle"></div>
 <div id="message" class="message">
 <span style="color:white;float:left;">
   <?php echo $row['mensagem']; ?>
 </span> <br/>
 <div>
  <span style="color:black;float:right;
          font-size:15px;clear:both;">
        <?php echo $row['uname']; ?>, 
        <!-- <?php  //echo $row['data']; ?> -->
         <?php $hoje=date('d/m/Y'); echo  $hoje; ?> 
 </span>
</div>
</div>
<br/><br/>
<?php
}else{
?>
 <div id="triangle1" class="triangle1"></div>
 <div id="message1" class="message1">
 <span style="color:white;float:right;">
  <?php echo $row['mensagem']; ?>
 </span> <br/>
 <div>
 <span style="color:black;float:left;
         font-size:15px;clear:both;">
      <?php echo $row['uname']; ?>, 
      <?php //echo $row['data']; ?>
      <?php $hoje=date('d/m/Y'); echo  $hoje; ?> 
 </span>
</div>
</div>
<br/><br/>
<?php
}
}
endwhile;
?>
</div>
    <footer>
    <!-- <h1> Deseja publicar o fórum?  </h1> -->
    <select class="seletor" name="publicar">
       <option value="nao"" selected> Alterar Visualização? </option>      
    </select>
    <input class="seletor1" type="submit" VALUE=Salvar>

  </form>
</div>
    </footer>
</form>
</main>   
</div>
 

</body>
</html>