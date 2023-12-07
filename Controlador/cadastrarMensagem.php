<?php
require_once '../Model/UsuarioMensagemDTO.php';
require_once '../Model/UsuarioMensagemDAO.php';
require_once "../Controlador/logica-usuario.php"; 


$mensagem = $_POST['mensagem'];
$usuarioMensagemDTO = new UsuarioMensagemDTO();
$usuarioMensagemDTO->setMensagem($mensagem);
$usuarioMensagemDAO = new UsuarioMensagemDAO();
$usuarioMensagemDAO->salvarMensagem($usuarioMensagemDTO);
//$usuarioMensagemDAO->salvarMensagemMedico($usuarioMensagemDTO);
//$usuarioMensagemDAO->listarMensagem($usuarioMensagemDTO);

//  ?>
// <!DOCTYPE html>
// <html lang="pt-br">

// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">

//     <link rel="preconnect" href="https://fonts.googleapis.com">
//     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
//     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
//     <link rel="stylesheet" href="../_cdn/boot.css">
//     <link rel="stylesheet" href="../_cdn/fonticon.css">
//     <link rel="stylesheet" href="../css/list_format copy.css">
//     <link rel="stylesheet" href="../css/style.css">

//     <title>Informaçoes saúde mental</title>
// </head>
   
// </head>

// <body>
//     <!--DOBRA CABEÇALHO-->

//     <header class="main_header">
//     <div class="main_header_content">
//             <a href="../index.php" class="logo">
//                 <img src="../img/logo.png"
//                     title="Fórum Saúde Mental"></a>
//             <nav class="main_header_content_menu">
//                 <ul>
//                 <?php if(usuarioEstaLogado()){  ?>
                  
                    
//                     <li><a href="../index.php">Voltar</a></li>
//                     <li><a href="../login/logout.php">Sair</a></li> 
//                     <li><a href=""><p class="alert-success"> Você está logado como 
//                         <?php echo $_SESSION['email']; ?> </a></li>  </p>

//                 <?php  }   ?>
//                 </ul>
//             </nav>
//         </div>
//     </header>
//     <!--FIM DOBRA CABEÇALHO-->
    
//     <section class="main_course_ratting_content_comment">
//         <header>
//            <h3><center>FÓRUM MÉDICO<center></h3>       
//         </header>
//         <article class="mensagem">
//         <?php
      
//             //$mensagem = $_POST['mensagem'];
//            // $usuarioMensagemDTO = new UsuarioMensagemDTO();
//           //  $usuarioMensagemDAO = new UsuarioMensagemDAO();
//             $array= $usuarioMensagemDAO ->listarMensagem();  

// ?>
// </div>
//         <?php
//             echo "<div class='corpo'>";
//             echo "<center><table class='av'>";
//             echo "<tr >";
//           //echo "<td> </td>";
//             echo "</tr>";
       
//          foreach ($array as $array) {
//                 echo "<tr>";
//                 echo "<td>". $array['idForum'] . "</td>";
//                 echo "<td>". $array['mensagem'] . "</td>";
//                 echo "<td> ";
//                 ?>
<!-- //                         <form action="../Controlador/responderMensagem.php" method="GET">
//                             <input type=hidden name=idForum value=<?php echo $array['idForum'] ;?> >
//                             <button>Responder</button>
//                         </form> 	 -->

//                         <form action="../Controlador/excluirMensagem.php" method="POST">
//                             <input type=hidden name=idForum value=<?php echo $array['idForum'] ;?> >
//                             <button>Excluir</button>
//                         </form>  
//                         <?php	
//                 echo "</td> ";
//                 echo "</tr>";
//         }
//         echo "</table> </center>";
//         echo"</div>";
       

//      ?>
//     </body>
// </html>



?>














