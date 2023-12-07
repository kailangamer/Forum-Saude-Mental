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
    <link href="../css/valorAssinatura.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_options.css">
    <link rel="stylesheet" href="../css/style.css" class="css">

    <title>Assinatura</title>
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
    <!--FIM DOBRA CABEÇALHO-->


    <main>
        <div class="main_opc">
            <section>
                <header class="main_course_header"></header>
                <div class="alinhamento">
                <a href="pagamento.php">
                    <article>
                        <h2>Mensal</h2>
                        <header>
                       
                            <p align="center"><br>
                                                              
                              
                               
                                        <div class="card-title">
                                            <!-- <h2>Básico</h2><br> -->
                                            <p id"preco"><i>R$</i>399,90/mês</p><br>
                                            <!-- <p><i>R$</i>399,90/mês</p> -->
                                        </div><bR>
                                        <hr>
                                          <BR><BR>
                                        <ul>
                                            <li><i class="fa fa-check-circle"></i>Ferramentas exclusivas</li>
                                            <li><i class="fa fa-check-circle"></i>Criação de comunidades</li>
                                            <li><i class="fa fa-check-circle"></i>Destaque no perfil</li>
                                            <li><i class="fa fa-check-circle"></i>1 ano de assinatura</li>
                                            <li><i class="fa fa-check-circle"></i>Moderação de diversas comunidades</li>
                                            <li><i class="fa fa-check-circle"></i>Desconto de 20%</li>
                                            <li><i class="fa fa-check-circle"></i>Mais 1 mês grátis</li>
                                        </ul>
                                      
                            </p>
                        </header>
                    </article>
                    </a>

                    <a href="pagamento.php">
                    <article>
                        <h2>Semestral</h2>
                        <header>
                            <p align="center"><br>
                                
                                
                               
                                
                                        <div class="card-title">
                                            <!-- <h2>Básico</h2><br> -->
                                            <p id"preco"><i>R$</i>1.800/Semestre</p>
                                            <p><i>R$</i>300/Mês</p>
                                        </div><bR>
                                        <hr>
                                          <BR>

                                        <ul>
                                            <li><i class="fa fa-check-circle"></i>Ferramentas exclusivas</li>
                                            <li><i class="fa fa-check-circle"></i>Criação Salas</li>
                                            <li><i class="fa fa-check-circle"></i>Destaque no perfil</li>
                                            <li><i class="fa fa-check-circle"></i>1 ano de assinatura</li>
                                            <li><i class="fa fa-check-circle"></i>Moderação de diversas comunidades</li>
                                            <li><i class="fa fa-check-circle"></i>Desconto de 20%</li>
                                            <li><i class="fa fa-check-circle"></i>Mais 1 mês grátis</li>
                                        </ul>
                                     
                              
                            </p>
                        </header>
                    </article>
                    </a>

                    <a href="pagamento.php">
                    <article>
                        <h2>Anual</h2>
                        <header>
                            <p align="center"><br>
                                
                                
                                
                                
                                        <div class="card-title">
                                            <!-- <h2>Básico</h2><br> -->
                                            <p id"preco"><i>R$</i>2.988/ano</p>
                                            <p><i>R$</i>249/mês</p>
                                        </div><bR>
                                        <hr>
                                          <BR>

                                        <ul>
                                            <li><i class="fa fa-check-circle"></i>Ferramentas exclusivas</li>
                                            <li><i class="fa fa-check-circle"></i>Criação de comunidades</li>
                                            <li><i class="fa fa-check-circle"></i>Destaque no perfil</li>
                                            <li><i class="fa fa-check-circle"></i>1 ano de assinatura</li>
                                            <li><i class="fa fa-check-circle"></i>Moderação de diversas comunidades</li>
                                            <li><i class="fa fa-check-circle"></i>Desconto de 20%</li>
                                            <li><i class="fa fa-check-circle"></i>Mais 1 mês grátis</li>
                                        </ul>
                                     
                            </p>
                        </header>
                    </article>
                    </a>
                </div>
            </section>
        </div>
    </main>


</body>

</html>