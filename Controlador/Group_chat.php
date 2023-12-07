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
   <form action="Group_chatRecebe.php" method=GET>

   <h1> Deseja publicar o fórum?
    <select name="publicar">
       <option value=" " selected> QUER PUBLICAR? </option>
        <option value="sim">SIM</option>
        <option value="nao">NÃO</option>
    </select>
    <input type="submit" VALUE=SALVAR>
  </h1>
  </form>
</div>
<?php }?>


<?php


if (isset($_GET["publicar"])){
$publicar=$_GET["publicar"];
if($_SESSION["email"]==3 && $publicar=="sim"){
    echo "<h1><center>Esse fórum será publicado!</center></h1>";

}else{
    echo "<h1><center>Esse fórum NÃO será publicado!</center></h1>";
}}
?>

<?php
if (isset($_GET["publicar"])){
$publicar=$_GET["publicar"];
if($_SESSION["email"]==2 && $publicar=="sim"){
    header("Location:Group_chatProfissional.php");  

}else{
    header("Location:Group_chatProfissional.php");  
}}

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
    ;
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
<BR>
<div id="container">
    <main>
        <header>
            <img src="logo_preta_sem_fundo.png" alt="">
            <div>
                <h2>FÓRUM MÉDICO</h2>
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
 
$query = "SELECT * FROM forum";
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
 <span class="mensagem" style="color:white;float:left;">
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
        <table>
        <tr>
           <th>
            <input  class="input1" type="text"  id="uname" name="uname"   placeholder="Usuário" style="text-transform: uppercase";>
           </th>
           <th>
            <textarea id="msg" name="msg"  rows='3' cols='50'  placeholder="Type your message">
            </textarea></th>
           <th>
            <input class="input2" type="submit"
            id="submit" name="submit" value="send">
           </th>               
        </tr>
        </table>               
    </footer>
</form>
</main>   
</div>
 

</body>
</html>