<!DOCTYPE html>
<html lang="pt-br">
<?php require_once("Controlador/logica-usuario.php") ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="_cdn/boot.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="_cdn/fonticon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/login.css">
    <title>FÓRUM SAÚDE MENTAL</title>
</head>

<body>



<?php if(usuarioEstaLogado()){  ?> 
    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img class="logo1" src="img/logo.png" alt="Bem vindo ao Fórum Saúde Mental"
                    title="Bem vindo ao Fórum Saúde Mental" ></a>
                    
                    
            
            <nav class="main_header_content_menu">
                <ul>
                   <?php  if(usuarioLogado()==1) {?>
                    <li><a href="Visao/salas.php">Salas</a></li>
                    <li><a href="Visao/informacoes.php">Informações</a></li>
                    <li><a href="Visao/postagens.php">Divulgações</a></li>
                    <li><a href="Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                          <?php echo  $_SESSION['email']; }?> </a></li>  </p>
                </ul>
           
   
             
           
                <ul>
                   <?php  if(usuarioLogado()==2) {?>
                    <li><a href="Visao/salas.php">Salas</a></li>
                    <li><a href="Visao/valorAssinatura.php">Assinaturas</a></li>
                    <li><a href="Visao/informacoes.php">Informações</a></li>
                    <li><a href="Visao/postagens.php">Divulgar</a></li>
                    <li><a href="Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                          <?php echo  $_SESSION['email']; }?> </a></li>  </p>
                </ul>
               

           
                <ul>
                   <?php  if(usuarioLogado()==3) {?>
                    <li><a href="Visao/salas.php">Salas</a></li>
                    <li><a href="Visao/informacoes.php">Informações</a></li>
                    <li><a href="Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                          <?php echo  $_SESSION['email']; }?> </a></li>  </p>
                </ul>
            

            
                <ul>
                   <?php  if(usuarioLogado()==4) {?>
                  
                    <li><a href="Visao/GerenciarUsuarios.php">Gerenciar Usuários</a></li>
                    <li><a href="Visao/gerenciarSalas.php">Gerenciar Salas</a></li>
                    <li><a href="Visao/gerenciarAssinaturas.php">Gerenciar Assinaturas</a></li>
                    <li><a href="Visao/gerenciarPagamento.php">Gerenciar Pagamento</a></li>
                    <!-- <li><a href="Visao/.php">Assinaturas</a></li> -->
                    
                    <li><a href="Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como <br>
                          <?php echo  $_SESSION['email']; }?> </a></li>  </p>
                </ul>
            </nav>
        </div>
        <?php  }   
        else{  ?>
         <header class="main_header">
        <div class="main_header_content">
            <a href="index.php" class="logo">
                <img src="img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                <li><a href="Visao/informacoes.php">Informações</a></li>                
                    <li><a href="" class="modal-link">Login</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    
    <?php

    }  ?>
  
    <!--FIM DOBRA CABEÇALHO-->
           
    <!-- POP LOGIN -->

   <!-- POP LOGIN -->

   <div class="overlay"></div>
    <div class="modal">
        <div class="div_login">
            <form action="Controlador/login.php" method="post">
                <h1>Login</h1>
                <br>
                <input type="email" placeholder="Email" name=email class="input">
                <br><br>
                <input type="password" placeholder="Senha" name=senha class="input">
                <br><br>
                <!-- <div class="link1">Não tem uma conta? -->
              
                <button class="button">Entrar</button><bR><br><bR>
                <p>Não tem conta?    <a href="Visao/cadastro.php">Cadastre-se</a></p>
                
            </form>
        </div>
    </div>
  
    <!-- FIM POP LOGIN -->

    <!--DOBRA PALCO PRINCIPAL-->

    <!--1ª DOBRA-->
    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <!-- <img class= "img" src="img/fundo6.png" alt=""> -->
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Você não precisa enfrentar <br>este problema sozinho. Peça ajuda! 
                        </h1>
                    </header>
                    <p>Valorize a sua saúde mental</p><BR>
                    <p><a href="Visao/saiba_mais.php" class="btn">Saiba Mais</a></p>
               
                </div>
            </article>
        </div>
        <!--FIM 1ª DOBRA-->
    </main>
    

    
        <section class="main_footer">
            <header><br><br>
                <!-- <center><h1>Quer saber mais?</h1></center> -->
            </header>
            <article class="main_footer_our_pager">
                <header>
                    <h2>Nossas Páginas</h2>
                </header>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Informações</a></li>
                    
                </ul>
            </article>
    
            <article class="mein_footer_limks">
                <header>
                    <h2>    Contato</h2>
                </header>
                <ul>
                        <!-- <li>Contato</a></li> -->
                        <li><a href="#">saudemental.etc2023@gmail.com</a></li>
                        <li><a href="#">(61)9 9135838293</a></li>
                        <!-- <li><a href="#">Termos de Uso</a></li> -->
                    </ul>
            </article>
    
            
            <article class="main_footer_about">
                <header>
                    <h2>Sobre o Projeto</h2>
                </header>
                <p></p>
            </article>
        </section>
        <footer class="main_footer_rights">
            <p>Fórum Saude Mental - Todos os direitos reservados.</p>
        </footer>
        <!-- FIM RODAPÉ -->
</body>
<script>
    // Seleciona o link e a janela modal
    var link = document.querySelector('.modal-link');
    var modal = document.querySelector('.modal');
    var overlay = document.querySelector('.overlay');

    // Adiciona um listener de evento para o link
    link.addEventListener('click', function (event) {
        event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

        overlay.style.display = 'block'; // exibe a camada escura
        modal.style.display = 'block'; // exibe a janela modal
    });

    // Adiciona um listener de evento para a camada escura
    overlay.addEventListener('click', function () {
        overlay.style.display = 'none'; // oculta a camada escura
        modal.style.display = 'none'; // oculta a janela modal
    });
</script>
</html>

      