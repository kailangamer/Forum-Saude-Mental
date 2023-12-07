<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../_cdn/boot.css" >
    <link rel="stylesheet" href="../_cdn/fonticon.css" >
    <link rel="stylesheet" href="../css/formulario.css">
  
    
    <title>Tela de Cadastro</title>
</head>

<body>
<?php
       if(isset($_REQUEST["formaPagamento"])){  
        $formaPagamento=$_REQUEST["formaPagamento"] ; 
           if($formaPagamento=='cartao'){
               header("location:pagamento1.php");
           }else if($formaPagamento=='pix'){
            header("location:pagamento2.php");
         
        }
    }
        ?>

        <header class="main_header">
        <div class="main_header_content">
        <a href="../index.html" class="logo">
        <img class="logo1" src="../img/logo.png" alt="Casdastre-se no site e conheça os beneficios que podemos fornecer através de informações"></a>
           <nav class="main_header_content_menu">
                <ul>
                    <li><a href="valorAssinatura.php">Voltar</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    <h1>Formulário de pagamento</h1>

    <div class="container">
        <form action="" method="GET">

            <div class="form-group">
                <label for="formaPagamento">Forma de pagamento:</label>
                <select name="formaPagamento" id="formaPagamento">
                    <option value="cartao">Cartão</option>
                    <option value="pix">Pix</option>
                
                </select>
            </div>
            <div class="form-group"><br>
             <!-- <button type="submit" ></button><br> -->
             <input id="submit" class="submit" type="submit" value="Cadastrar-se" >
            </div>
          
        </form>

        <!-- <div class="form-group_btn">
                <p>
                    <br><br><br>
                    <a href="cadastroComum.php" >Cadastrar</a>
                </p>
            </div> -->
    </div>
    


           
                
</body>
</html>