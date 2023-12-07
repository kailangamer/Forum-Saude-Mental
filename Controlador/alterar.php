<?php
require_once "logica-usuario.php"; 
require_once '../Model/UsuarioDTO.php';
require_once '../Model/UsuarioDAO.php'; 


$idUsuario = $_GET['idUsuario'];
$dao= new UsuarioDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];

    $usuarioDTO = new UsuarioDTO();
    $usuarioDTO->setIdUsuario($idUsuario);
    $usuarioDTO->setApelido($apelido);
    $usuarioDTO->setEmail($email);
    $dao->alterarUsuario($idUsuario, $usuarioDTO);
    
    header("location: ../Visao/listarUsuarios.php");
    
} else {
    $usuario = $dao->listarProfissionalPorId($idUsuario);
    
    if (!$usuario) {
        header("location: ../Visao/listarUsuarios.php?");
        exit;
    }
    
}
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
    <link rel="stylesheet" href="../_cdn/boot.css">
    <link rel="stylesheet" href="../_cdn/fonticon.css">
    <link rel="stylesheet" href="../css/list_format copy.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Informaçoes saúde mental</title>
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
                  
                    
                    <li><a href="../Visao/listarUsuarios.php">Voltar</a></li>
                    <li><a href="../Controlador/logout.php">Sair</a></li> 
                    <li><a href=""><p class="alert-success"> Você está logado como 
                        <?php echo $_SESSION['email']; ?> </a></li>  </p>

                <?php  }   ?>
                </ul>
            </nav>
        </div>
    </header>
   


    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
    <div class="main_header_content">
            
        </div>
    </header>

    <!-- <form action="" method="post">

        <input type="hidden" name="idUsuario" value="<?=$usuario['idUsuario']?>">
        <input type="text"   name="apelido"  value="<?=$usuario['apelido']?>">
        <input type="email" name="email"  value="<?=$usuario['email']?>">

        <button type="submit">Salvar</button>
    </form> -->
</body>
</html>

<html>
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
        <h3><center>Alterar Dados:<center></h3>
        <?php
   
      
            $usuarioDTO = new UsuarioDTO();
            $usuarioDAO = new UsuarioDAO();
            $array= $usuarioDAO->listarProfissional();          
       
            echo "<div class='corpo'>";
            echo "<center><table class='av'>";
                   // echo "<th>idUsuario</th>";
                    echo "<th>apelido</th>";
                    echo "<th>email</th>";
                    echo "<th>senha</th>";
                
                    echo "<th>Alterar</th>";
                    echo "</tr>";
                     ?> <form action="" method="post">

                            <tr>
                               <!-- <td><input type="hidden"  name="idUsuario" value="<?=$usuario['idUsuario']?> ></td>-->
                                <td> <input type="text"   name="apelido"  value="<?=$usuario['apelido']?>"></td>
                                <td> <input type="email"  name="email"  value="<?=$usuario['email']?>"></td>
                                <td><input type="password"   name="senha"  value="<?=$usuario['senha']?>"></td>


                                <!-- <td><input type="password"   name="senha"  value="<?=$usuario['senha']?>"></td> -->


                                <!-- <td> <input type="senha"   name="senha"  value=""></td> -->

                                <td>
                                        <button>
                                                <img src='../img/editar_icon.png' width="20px" height="20px">
                                        </button>
                                       
                                </td>
                        </tr>
                     </form>
                    </td> 
                </tr>
         <?php  //}
         
         echo "</tabxle> </center>";
         echo"</div>";
        ?>
    </body>
</html>
