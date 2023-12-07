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
    <link rel="stylesheet" href="../css/list_format copy.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Informaçoes saúde mental</title>
</head>


    <title>PROJETO HTLM MOD 3</title>
</head>

<body>
    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
    <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png"
                    title="Fórum Saúde Mental"></a>
            <nav class="main_header_content_menu">
                <ul>
                <?php if(usuarioEstaLogado()){  ?>
                  
                    
                    <li><a href="../Visao/gerenciarUsuarios.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo $_SESSION['email']; ?> </a></li>  </p>

                <?php  }   ?>
                </ul>
            </nav>
        </div>
    </header>
    <!--FIM DOBRA CABEÇALHO-->
 
    <!DOCTYPE html>
<?php
   // require_once '../Conexao/ProfissionalDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <!-- <script type="text/javascript">
        function confirmar(){
            if(confirm("Deseja Excluir o Usuário?")){
                return true;
            }else{
                return false;
            }
        }
    </script> -->
    
    <body>
        <!-- <form action="" method="post">
            Pesquisar por nome:<input type="text" name="pnome"/>
            <input type="submit" value="Pesquisar"/>
        </form> -->
        <h3><center>Gerenciar Usuário Comum:<center></h3>
     
        <?php
   
      
            $usuarioDTO = new UsuarioDTO();
            $usuarioDAO = new UsuarioDAO();
            $array= $usuarioDAO->listarProfissional();                   
    echo "<div class='corpo'>";
        echo "<center><table class='av'>";
            echo "<tr >";
           echo "<th>idUsuario</th>";
            echo "<th>apelido</th>";
            echo "<th>email</th>";
            // echo "<th>senha</th>";
            echo "<th>Excluir</th>";
            echo "<th>Alterar</th>";
            echo "</tr>";
       
         foreach ($array as $array) {

            if( $array['idPerfil']==1){
                echo "<tr>";//abrindo linha
                echo "<td>". $array['idUsuario'] . "</td>";
                echo "<td>". $array['apelido']      . "</td>";	
                echo "<td>". $array['email']      . "</td>";
                // echo "<td><p>". $array['senha']      . "</p></td>";   
                echo "<td> ";
                ?>
                        <form action="../Controlador/excluir.php" method="GET">
                            <input type=hidden name=idUsuario value= <?php echo $array['idUsuario'] ;?> >
                            <button>
                                <img src='../img/excluir.png' width="20px" height="20px">
                            </button>
                        </form> 	
                        <?php	
                echo "</td> ";
                echo  "<td> "; 
                    ?>
                        <form action="../Controlador/alterar.php" method="GET">
                                <input type=hidden name=idUsuario value=<?php echo $array['idUsuario'];?> >
                                <!-- <input type=hidden name=nome      value=<?php echo $array['nome'];?> > -->
                                <button>
                                    <img src='../img/editar_icon.png' width="20px" height="20px">
                                </button>
                        </form> 		  
                        <?php	
		        echo "</td> ";
                echo "</tr>";

            }
        }
        echo "</tabxle> </center>";
        echo"</div>";
        ?>
    </body>
</html>

