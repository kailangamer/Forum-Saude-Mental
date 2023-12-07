<?php  
require_once "../Controlador/logica-usuario.php"; 
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
    <link href="../_cdn/boot.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_options.css">
    <link href="../css/informacoes1.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" class="css">
   

    <title>Informaçoes saúde mental</title>
</head>

<body>



    
    <!-- DOBRA CABEÇALHO -->
    <?php if(usuarioEstaLogado()){  ?>
    <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                 
                    <li><a href="../index.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
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
    <!-- FIM DOBRA CABEÇALHO -->

          <!-- INICIO DOBRA INFORMAÇOES -->

    <div class="main_school">
        <div class="main_school_content">
            <header class="main_school_content_header">

                <center><h2>INFORMAÇÕES SOBRE SAÚDE MENTAL</h2></center><br><br><br>

            </header>
            <div class="main_school_content_left">
            <article class="main_school_content_left_content">
                
              
                <p><h2>Saúde mental é um estado de bem-estar no qual o indivíduo é capaz de usar suas próprias habilidades, 
                recuperar-se do estresse rotineiro, ser produtivo e contribuir com a comunidade. Através do humor nós vemos a difença do que parece racional e  irracional ou importante e insignificante.Também desperta o nosso sentido de sobrevivência e preserva a nossa saúde mental.” </p><br>
                <p> <h2>O termo está relacionado à forma como uma pessoa reage às exigências,
                     desafios e mudanças da vida e ao modo como harmoniza suas ideias e emoções.
                     Além de ser determinante para a estabilidade física, a saúde mental está relacionada à qualidade dam interação 
                     individual e coletiva. No cenário atual, buscar alternativas que possibilitem a harmonia nessas relações é uma urgente necessidade.</h2></p><br>

                <p><h2>Se você está em busca de medidas que sinalizem a promoção da saúde
                 mental e a garantia dos direitos fundamentais associados ao bem-estar
                e à qualidade de vida, este é o caminho.</h2></p>
                    
            </article>
           
        </div>

        <div class="main_school_content_right">
            <img src="../img/doutor.webp">
        </div>
       
        <!-- FIM DA DOBRA INFORMAÇOES -->


        <!-- INICIO SESSÃO DICAS, MITOS E FATOS -->
        <section class="main_blog">
            <header class="main_blog_header">

                <center><br><I><h2>TUDO QUE VOCÊ PRECISA SABER SOBRE SAÚDE MENTAL!</h2></I></center><br><br>

                <p></p>
            </header>
            <article class="main_blog_mitos">
                
                <CENTER><h2>Mitos</h2></CENTER><br> 
                <ul>
                <li>As crianças não passam por problemas de saúde mental. </li><br>

               <li> Pessoas com necessidades de saúde mental, mesmo aquelas que estão gerenciando sua doença mental, não podem tolerar o estresse de manter um emprego. </li><br>

                <li>Fraqueza de personalidade ou falhas de caráter causam problemas de saúde mental. </li><br>

                <li>Pessoas com problemas de saúde mental podem sair dessa se se esforçarem o suficiente.</li><br>

                <li>Terapia e auto ajuda são perda de tempo. Por que se preocupar quando você pode apenas tomar uma pílula.</li><br>

                <li>Eu não posso fazer nada por uma pessoa com problema de saúde mental</li><br>
            </ul>

            </article>

            <article class="main_blog_fatos">
                
                <CENTER><h2>Fatos</h2></CENTER><br>
                                       
              
                    <li>Pessoas com transtornos mentais, são tão produtivas quanto outros colaboradores. </li><br>
                    <li>Mesmo crianças muito pequenas podem apresentar sinais de alerta precoce de problemas de saúde mental. Esses problemas de saúde mental são muitas vezes clinicamente diagnosticáveis ​​e podem ser um produto da interação de fatores biológicos, psicológicos e sociais.</li><br>

                    <li>A grande maioria das pessoas com problemas de saúde mental não são mais propensas a serem violentas do que qualquer outra pessoa.</li><br>
                    <li>A prevenção de transtornos mentais, emocionais e comportamentais concentra-se em abordar fatores de risco conhecidos, como exposição a traumas, que podem aumentar as chances de crianças, jovens e adultos jovens desenvolverem problemas de saúde mental.</li><br>
                    <li>Os problemas de saúde mental não têm nada a ver com ser preguiçoso ou fraco e muitas pessoas precisam de ajuda para melhorar.</li><br>


                  
            </article>
            <!-- <div class="boa"> -->
            <article class="main_blog_dicas">
                
                <CENTER><h2>Dicas</h2></CENTER><br>
                    
                <ul>    

                <li>Cuide da Saúde física.</li>
                <p>  Quando o assunto é a saúde mental nem passa pela cabeça o "corpo", apenas o pisicológico. Mas por incrivel que pareça tudo que é feito com o corpo afeta de alguma maneira  o nosso pisicológico. Um exemplo é quando deixamos de nos exercitar, nos tornamos sedentario, oque aumenta as chances de ficar ansioso e depressiv.Porque ao se exercitar ocorre o aumenta da oxigenação cerebral , oque é importante para nosso bem estar mental.</p>

                <li>Tenha boas relações</li>
                <p>Ao ter boas relações isso torna um ponto de fuga.É como se os probemas fiquem pequenos quando se tem a companhia de alguem que te faz bem. .</p> 
               
                
               <li>Valorize os momentos de lazer.</li>
               <p>É recomendado valorizar esses momentos pois é quando o cabeça foca em outras coisas que não sejam as tribulações do cotidiano. Faz com que o corpo relaxe trazendo a sensação de conforto e paz. Ajudando a lidar com as tribulações com mais tranquilidade.</p>

                <li> Diminuir o tempo online.</li>
                <p>A internet é faca de dois gumes. Por um lado ela ajuda as pessoas com a questão de comunicação e a se distrair dos problemas. Mas o mesmo meio de comunicação é onde ocorre os ataques diversos(como o bullying e preconceitos), ataques que adoecem a saude mental de qualquer um. Tambem prende a atenção em nivel que o usuário não se importa consigo mesmo nem com as pessoas do seu convivio cotidiano. A internet vicia tanto quanto drogas, então saber regrar o tempo online é de extrema importância no vida das pessoas para que elas possam aproveitar tudo que pode ser feito offline, desde uma simples conversa com um amigo a uma viajem em familía.</p>
                

                <li>Estabeleça objetivos.</li>
                <p>Ao estabelecer objetivos. Distrações ou ataques futeis não te atrapalharam e nem te afetarão pois sua mente vai estar focada em melhorar. </p>
                
                <li>  Tenha ajuda profissional.</li>
                <p>A ajuda profissional é muito importante. Sempre á aqueles simples problemas que nos deixam cabisbaixos e sem saber o que fazer. Porém muitas das vezes é encontrado a solução com o tempo. Mas tem coisas que extrapolam os limites, problemas que passam afetar a vida de uma maneira inexplicavel. Como o desempenho no trabalho e até a saúde fisica é afetada. Não deixe que seus probelmas te incapacitem de procurar ajuda, mas quando pensar que a unica tragetória é procurar ajuda ilicitas. Peça ajuda a os familiares e/ou procure profissionais. Não deixe que os pensamentos negativos tomem conta da sua vida. Você quem manda, vá e procure ser ajudado. Por que isso tem que vir de voce em primeiro lugar. Não dá pra ajudar quem não quer ajuda.</p>
                
                <li> Priorize o sono.<br></li>
                <p>Dormir bem é simples, basta ter um sono de qualidade e tempo suficiente. Mas na teoria tudo é mais facil. Pois é dificil ter os dois , pois sempre há falta de tempo e/ou o estresse do dia a dia. Dormir mal , pouco ou de forma fragmentada pode ser prejudicial a saúde . Nós dependemos de uma boa noite de sono , o metabolismo necessita disso. Mas para resolver o que nos impede de dormir basta algo que te relaxe antes de ir dormir.</p>
            </ul>
            <!-- <p>8. Tenha pensamentos positivos.</p><br>
                

                <p>9. Bloquear notícias trágicas.</p><br>


                <p>10. Lembre-se, tudo tem solução!</p><br> -->

                
        
            </article>
          
        </div> 
        </section>
    </div>

<!-- FIM SESSÃO DICAS, MITOS E FATOS-->

   
</body>

</html>