<?php
require_once "logica-usuario.php"; 
require_once '../Model/AssinaturaDTO.php';
require_once '../Model/AssinaturaDAO.php'; 


$idAssinatura = $_GET['idAssinatura'];
$dao= new AssinaturaDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $idAssinatura = $_POST['idAssinatura'];
    $nomedt = $_POST['nomedt'];
    $valorTotal = $_POST['valorTotal'];

    $assinaturaDTO = new AssinaturaDTO();
    $assinaturaDTO->setIdAssinatura($idAssinatura);
    $assinaturaDTO->setNomedt($nomedt);
    $assinaturaDTO->setValorTotal($valorTotal);
    $dao->alterarAssinatura($idAssinatura, $assinaturaDTO);
    
    header("location: ../Visao/gerenciarAssinaturas.php");
}
else {
    $assinatura = $dao->listarAssinaturaPorId($idAssinatura);
    
    if (!$assinatura) {
        header("location: ../Visao/gerenciarAssinaturas.php");
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


    <title>PROJETO HTLM MOD 3</title>
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
                  
                    
                    <li><a href="../Visao/gerenciarAssinaturas.php">Voltar</a></li>
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

        <input type="hidden" name="idUsuario" value="<?=$assinatura['idAssinatura']?>">
        <input type="text"   name="apelido"  value="<?=$assinatura['nomedt']?>">
        <input type="email" name="email"  value="<?=$assinatura['valorTotal']?>">

        <button type="submit">Salvar</button>
    </form> -->
</body>
</html>

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
        <h3><center>Alterar Dados:<center></h3>
        <?php
   
      
            $assinaturaDTO = new AssinaturaDTO();
            $assinaturaDAO = new AssinaturaDAO();
            $array= $assinaturaDAO->listarAssinatura();          
       
                    echo "<center><table border='1' style='border:1px outset #678eab'>";
                    echo "<tr bgcolor='#678eab'>";
                   // echo "<th>idUsuario</th>";
                    echo "<th>nomedt</th>";
                    echo "<th>valorTotal</th>";
                    
                
                    echo "<th>Alterar</th>";
                    echo "</tr>";
                     ?> <form action="" method="post">

                            <tr>
                               <!-- <td><input type="hidden"  name="idUsuario" valuepagamento['idPagamento']?> ></td>-->
                                <td> <input type="text"   name="nomedt"  value="<?=$assinatura['nomedt']?>"></td>
                                <td> <input type="text"  name="valorTotal"  value="<?=$assinatura['valorTotal']?>"></td>
                                
                                <td>
                                        <button>
                                                <img src='../img/editar_icon.png' width="30px" height="30px">
                                        </button>
                                </td>
                        </tr>
                     </form>
                    </td> 
                </tr>
         <?php  //}
        echo "</table> </center>";
        ?>
    </body>
</html>
