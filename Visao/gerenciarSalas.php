<?php 
    require_once "../Controlador/logica-usuario.php"; 
   require_once '../Model/UsuarioDAO.php';
   require_once '../Model/UsuarioDTO.php';?>
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
    <link rel="stylesheet" href="../css/direitos_autorais1.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Desenvolvedores</title>
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
                  
                    
                    <li><a href="../index.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo $_SESSION['email']; ?> </a></li>  </p>

                <?php  }   ?>
                </ul>
            </nav>
        </div>
    </header>
   

        <section class="main_blog">
            <header class="main_blog_header"><BR>
                <h1 class="icon-blog">Gerenciar Salas:</h1>
            </header>
            <article>
                <a href="listarSala.php"><img src="../img/people.png" width="100px" alt="post" title="Salas"></a>
               <center> <p>Salas</p></center>
            
            </article>
            <article>
                <a href="listarForum.php"><img src="../img/communication.png" width="100px" alt="post" title="Forum"></a>
                <center><p>Fórum</p></center>

            </article>
            <!-- <article>
                <a href="listarProfissional.php"><img src="../img/prof_icon.png" width="100px" alt="post" title="Profissional"></a>
                <center><p>Profissional</p></center>

            </article> -->
            
          
        </section>
       
            <!-- FIM RODAPÉ -->
           

</body>

</html>