<?php
require_once "logica-usuario.php"; 
require_once '../Model/MensagemDTO.php';
require_once '../Model/MensagemDAO.php'; 
require_once '../Model/Conexao.php';

?>
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
    <link rel="stylesheet" href="../css/list_format copy.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Informaçoes saúde mental</title>
</head>


    <title>PROJETO HTLM MOD 3</title>
</head>

<body>

    <header class="main_header">
    <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                <?php if(usuarioEstaLogado()){  ?>
                  
                    
                    <li><a href="../Visao/listarForum.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo $_SESSION['email']; ?> </a></li>  </p>

                <?php  }   ?>
                </ul>
            </nav>
        </div>
    </header>
   
    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
    <div class="main_header_content">
            
        </div>
    </header>
    <h3><center>Alterar Dados:<center></h3>

<body>
<?php

        $idForum =  $_REQUEST['idForum'];
        $uname =     $_REQUEST['uname'];
        $mensagem =  $_REQUEST['mensagem'];
        $ativo =     $_REQUEST['ativo'];
        $data =      $_REQUEST['data'];
        $idSala =   $_REQUEST['idSala'];
      
        echo  $idForum;
        echo  $uname;
        echo  $mensagem;
        echo  $ativo;
        echo $data;
        echo $idSala;
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "saudemental";

        $con = new mysqli($host, $user, $pass, $db_name);
       
            
         $sql = "UPDATE forum SET  uname='$uname', mensagem=' $mensagem', ativo='$ativo', idSala='$idSala'
                 WHERE idForum =185 ";
          $stmt =$con->prepare($sql);
       

                echo "
                        <script>        
                            alert('Dados alterados com sucesso!');
                            setTimeout(function() {
                                window.location.href = '../Visao/listarForum.php';
                            }, 0000);
                        </script>
                        ";
    
                $stmt->execute();
                return TRUE;
    
           
    
?>   
    </body>
</html>
