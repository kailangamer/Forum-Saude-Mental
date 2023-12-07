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
    <link href="../_cdn/boot.css" rel="stylesheet">
    <link href="../css/saiba_mais.css" rel="stylesheet">
    <link href="../css/fonticon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Saiba Mais</title>
</head>

<body>
    <!--DOBRA CABEÇALHO-->

    <?php if(usuarioEstaLogado()){  ?>
    <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                    
                    <li><a href="../index.php">Voltar</a></li>
                    <li><a href="../login/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
	                      <?php echo $_SESSION['email']; ?> </a></li>  </p>
                </ul>
            </nav>
        </div>
    </header>
    <?php  } 

    else{ ?>
        <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="../index.php">Voltar</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    
    <?php

    }  ?>
    <!--FIM DOBRA CABEÇALHO-->
    
              <!-- INICIO SESSÃO DOBRA  CURSOS-->
              <section class="main_course">
            <header class="main_course_header">
                <img src="../img/logo_preta_sem_fundo.png" alt="Fórum Saúde Mental" title="img" width="300px">
                <h1>Saiba Mais</h1>
                <p>Um pouco sobre o Sistema</p>
            </header>
            <div class="main_course_content">
            <article>
                    <header>
                        <h2>Quem Somos</h2>
                        <p>Somos alunos do curso Técnico em Informática no ETC - Escola Técnica de Ceilândia. Que escolhemos desenvolver um sistema com o intuito auxiliar a todos que estejam precisando de ajuda com a saúde mental. E dar a visibilidade aos profissionais que trabalham nas areas que envolvem a saúde mental.</p>
                    </header>
                </article>
                <article>
                    <header>
                        <h2>Para quem é o site </h2>
                        <p>Esse sistema é para todos que estão passando por dificuldades que afetam a saúde mental, trazendo dicas e a oportunidade de conversar com profisionais. Não só aos "pacientes" que esse sistema vai ser de grande ajuda, mas também para os profissioais que buscam reconhecimento ao seu trabalho. Através do nosso meio de divulgação no sistema. </p>
                    </header>
                </article>
                
                <article>
                    <header>
                        <h2>Como funciona</h2>
                      <p>Ao Usuario se cadastrar estará disponivel as salas que dá acesso ao fórum, onde irá começar uma conversar com o profissional da sua escolha. Dando a confiança ao usuário assim ele terá total liberdade para tirar suas duvidas e pedir ajuda/conselhos aos profissionais.  <!--ma mensagem será divulgada em um local do sistema, e esse o usuário decidirá se tem interesse em marcar uma consulta com o profisional presencialmente </p> -->
                    </header>
                </article>
                <article>
                    <header>
                        <h2>Como funciona ao profissional</h2>
                        <p>O profissional se cadastra no sistema sabendo que o serviço dele de responder os "pacientes" está sendo totalmente voluntário a principio. Mas caso ele queira divulgar o seu trabalho , ele precisa fazer uma assinatura. Ao realizar essa assinatura ele terá acesso a funcão "Divulgar" , onde poderá postar informações sobre seu trabalho.</p>
                    </header>
                </article>
            </div>
            <!-- FIM SESSÃO DOBRA  CURSOS-->

    <!--INICIO DA DOBRA RODAPE -->

    <section class="main_optin_footer">
    <div class="main_optin_footer_concent">
        <header>
            <h1>Saiba mais Sobre nós :)</h1>
        </header>
        <article>
            <header>
                <h2> <p><a href="direitos_autorais.php" class="btn">Desenvolvedores</a></p></h2>
            </header>
        </article>
    </div>
    </section>

    <!-- <section class="main_footer">
        <header>
            <center><h1>Quer saber mais?</h1></center>
        </header>
        <article class="main_footer_our_pager">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Salas</a></li>
                <li><a href="#">Informações</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </article>

        <!-- <article class="mein_footer_limks">
            <header>
                <h2>Links Úteis</h2>
            </header>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article> -->

        <!-- <article class="main_footer_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>A saúde mental foi escolhida como tema pois é algo que claramente nos falta no cotiano, as informações , o contato com um profissional de verdade. Ou pela sociedade subestimar e levar a saude mental como frescura. Porem através desse projeto queremos fazer com que a saude mental receba sua devida importância. </p>
        </article>
    </section> --> 
    <footer class="main_footer_rights">
        <p>FSM</p>
    </footer>
</body>

</html>