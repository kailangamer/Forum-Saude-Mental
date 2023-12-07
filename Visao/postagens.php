<?php 
    
   require_once '../Model/PagamentoDAO.php';
   require_once '../Model/PagamentoDTO.php';?>

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
    <link rel="stylesheet" href="../css/style.css" class="css">
    <link rel="stylesheet" href="../css/postagens.css">

    <title>Divulgação</title>
</head>

<body>
      <!--DOBRA CABEÇALHO-->

      <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img class="logo1" src="../img/logo.png" alt="Bem vindo ao Fórum Saúde Mental"
                    title="Bem vindo ao Fórum Saúde Mental"></a>
                    

            <nav class="main_header_content_menu">
                <ul>
        
                <?php if(usuarioEstaLogado()){  ?>
    
                
                    
                    <li><a href="../index.php">Voltar</a></li>
                    <li><a href="../Controlador//logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
	                      <?php echo $_SESSION['email']; ?> </a></li>  </p>
                
    <?php  }   ?>
                   
                </ul>
            </nav>
        </div>
    </header>
    <!--FIM DOBRA CABEÇALHO-->

        <h1>Divulgações</h1>
    
<p ></p>

    <section id="post-section">
        <!-- Área para exibir postagens dos profissionais --><div>
        <?php include '../controlador/display_posts.php'; ?>
                </div>
    </section>
    <?php  if(usuarioLogado()==2) {?>
   
        <?php
         
            $pagamentoDTO = new PagamentoDTO();
            $pagamentoDAO = new PagamentoDAO();
            $array= $pagamentoDAO->listarPagamento();                   
   
         foreach ($array as $array) {
            $pagamento= $array['pagamento'];
                  
        }       
       if ($pagamento=='SIM'){
    ?>      
        <section id="post-form">
        <!-- Formulário para profissionais postarem seus trabalhos -->
       <?php  include 'post_form.php'; ?> 
    </section>
    <?php } 
    }?>
</body>
  
</html>
