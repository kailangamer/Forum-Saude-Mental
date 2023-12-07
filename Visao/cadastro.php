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
       if(isset($_REQUEST["perfil"])){  
        $perfil=$_REQUEST["perfil"] ; 
           if($perfil=='MED'){
               header("location:cadastroMediador.php");
           }else if($perfil=='COM'){
            header("location:cadastroComum.php");
          } else if($perfil=='MED'||$perfil=='NUT'||$perfil=='TER'){
            header("location:cadastroProfissional.php");
          }   
        }
        ?>

        <header class="main_header">
        <div class="main_header_content">
        <a href="../index.html" class="logo">
        <img class="logo1" src="../img/logo.png" alt="Casdastre-se no site e conheça os beneficios que podemos fornecer através de informações"></a>
           <nav class="main_header_content_menu">
                <ul>
                    <li><a href="../index.php">Voltar</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    <h1>Formulário Cadastro</h1>

    <div class="container">
        <form action="" method="GET">

            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <select name="perfil" id="perfil">
                    <option value="TER">Profissional</option>
                    <option value="MED">Mediador</option>
                    <option value="COM">Comum</option>
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