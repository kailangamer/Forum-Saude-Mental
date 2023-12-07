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
                                                        
                    <li><a href="../index.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <!-- <?php echo $_SESSION['usuario_logado']; ?>  -->
                        <?php echo $_SESSION['email']; ?></a></li>  </p>

                <?php  }   ?>
                   
                </ul>
            </nav>
        </div>
    </header>
   

        <!-- INICIO SESSÃO ARTIGOS -->
        <div class="container">
        <h1>Salas</h1>
        <main>
            <div>
                <section class="main_course">
                    <header class="main_course_header"></header>
                    <div class="ajust">
<!-- ............................................................................................ -->
                    <?php if($_SESSION["usuario_logado"]==1){?>
                        <a href="../Controlador/Group_chat.php">
                        <article>
                            <header>
                                <p>
                            
                                    
                                        <img src="../img/medico.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                  
                                </p><br>
                                <p class="nome_sala">Médico</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>  

                    <?php if($_SESSION["usuario_logado"]==3){?>
                        <a href="../Controlador/Group_chatMediador.php">
                        <article>
                            <header>
                                <p>
                            
                                
                                        <img src="../img/medico.png" alt="" title="" width="150" height="150">
                                   
                                </p><br>
                                <p class="nome_sala">Médico</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>

                        <?php if($_SESSION["usuario_logado"]==2){?>
                    <a href="../Controlador/Group_chatProfissional.php">
                        <article>
                            <header>
                                <p>
                                   
                                        <img src="../img/medico.png" alt="" title="" width="150" height="150">
                                   
                                </p><br>
                                <p class="nome_sala">Médico</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>
<!-- ...................................CHAT NUTRICIONISTA......................................................... -->
                          <?php if($_SESSION["usuario_logado"]==1){?>
                            <a href="../Controlador/Group_chatN.php">
                        <article>
                            <header>
                                <p>
                            
                                    
                                        <img src="../img/nutricionista.png" alt="" title="" width="150" height="150">
                                   
                                </p><br>
                                <p class="nome_sala">Nutricionista</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>  

                    <?php if($_SESSION["usuario_logado"]==3){?>
                        <a href="../Controlador/Group_chatMediadorNutricionista.php">
                        <article>
                            <header>
                                <p>
                            
                                    
                                        <img src="../img/nutricionista.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                    
                                </p><br>
                                <p class="nome_sala">Nutricionista</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>

                        <?php if($_SESSION["usuario_logado"]==2){?>
                    <a href="../Controlador/Group_chatNutricionista.php">
                        <article>
                            <header>
                                <p>
                                  
                                        <img src="../img/nutricionista.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                
                                </p><br>
                                <p class="nome_sala">Nutricionista</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>
<!-- ..........................................Chat Pisicólogo................................................. -->
    <?php if($_SESSION["usuario_logado"]==1){?>
                <a href="../Controlador/Group_chatP.php">
                        <article>
                            <header>
                                <p>
                            
                                  
                                        <img src="../img/psicologo.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                    
                                </p><br>
                                <p class="nome_sala">Psicólogo</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>  

                    <?php if($_SESSION["usuario_logado"]==3){?>
                    <a href="../Controlador/Group_chatMediadorPsicologo.php">
                        <article>
                            <header>
                                <p>
                            
                                   
                                        <img src="../img/psicologo.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                    
                                </p><br>
                                <p class="nome_sala">Psicólogo</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>

                        <?php if($_SESSION["usuario_logado"]==2){?>
                            <a href="../Controlador/Group_chatPsicologo.php">
                        <article>
                            <header>
                                <p>
                               
                                        <img src="../img/psicologo.png" alt="Cadastro" title="Cadastro" width="150" height="150">
                                  
                                </p><br>
                                <p class="nome_sala">Psicólogo</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>


<!-- ....................................Chat Terapeuta....................................................... -->
          <?php if($_SESSION["usuario_logado"]==1){?>
            <a href="../Controlador/Group_chatT.php">
                        <article>
                            <header>
                                <p>
                            
                                    
                                        <img src="../img/terapeuta.jpg" alt="Cadastro" title="Cadastro" width="150" height="150">
                              
                                </p><br>
                                <p class="nome_sala">Terapeuta</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>  

                    <?php if($_SESSION["usuario_logado"]==3){?>
                        <a href="../Controlador/Group_chatMediadorTerapeuta.php">
                        <article>
                            <header>
                                <p>
                            
                                    
                                        <img src="../img/terapeuta.jpg" alt="Cadastro" title="Cadastro" width="150" height="150">
                                    
                                </p><br>
                                <p class="nome_sala">Terapeuta</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>

                        <?php if($_SESSION["usuario_logado"]==2){?>
                        <a href="../Controlador/Group_chatTerapeuta.php">
                        <article>
                            <header>
                                <p>
                                        <img src="../img/terapeuta.jpg" alt="Cadastro" title="Cadastro" width="150" height="150">
                                   
                                </p><br>
                                <p class="nome_sala">Terapeuta</p>
                            </header>
                        </article>
                        </a>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </main>
    
    
<!-- FIM SESSÃO ARTIGOS -->
        

</body>

</html>