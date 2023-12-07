<?php
require_once "logica-usuario.php"; 
require_once '../Model/MediadorDTO.php';
require_once '../Model/MediadorDAO.php'; 
// require_once '../Model/UsuarioDTO.php';
// require_once '../Model/UsuarioDAO.php'; 



$idUsuario = $_GET['idUsuario'];
$dao= new MediadorDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    $mediadorDTO = new MediadorDTO();
    $mediadorDTO->setNome($nome);
    $mediadorDTO->setEmail($email);
    $mediadorDTO->setSenha($senha);
    $mediadorDTO->setTelefone($telefone);
    $mediadorDTO->setCep($cep);
    $mediadorDTO->setLogradouro($logradouro);
    $mediadorDTO->setNumero($numero);
    $mediadorDTO->setComplemento($complemento);
    $mediadorDTO->setBairro($bairro);
    $mediadorDTO->setCidade($cidade);
    $mediadorDTO->setIdUsuario($idUsuario);
    $dao->alterarMediador($idUsuario, $mediadorDTO);
    
    header("location: ../Visao/listarMediador.php");
    
} else {
    $usuario = $dao->listarProfissionalPorId($idUsuario);
    
    if (!$usuario) {
        header("location: ../Visao/listarMediador.php?");
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
                  
                    
                    <li><a href="../Visao/listarMediador.php">Voltar</a></li>
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
   
      
            $mediadorDTO = new MediadorDTO();
            $mediadorDAO = new MediadorDAO();
            $array= $mediadorDAO->listarProfissional();          
       
            echo "<div class='corpo'>";
            echo "<center><table class='av'>";
                echo "<tr >";
                   // echo "<th>idUsuario</th>";
                   echo "<th>nome</th>";
                   echo "<th>email</th>";
                   echo "<th>senha</th>";
                //    echo "<th>CPF</th>";
                //    echo "<th>CNPJ</th>";
                   echo "<th>Telefone</th>";
                   echo "<th>cep</th>";
                   echo "<th>Logradouro</th>";
                   echo "<th>Numero</th>";
                   echo "<th>Complemento</th>";
                   echo "<th>Bairro</th>";
                   echo "<th>Cidade</th>";
                
                    echo "<th>Alterar</th>";
                    echo "</tr>";
                    ?> <form action="" method="post">

                    <tr>
                       <!-- <td><input type="hidden"  name="idUsuario" value="<=$usuario['idUsuario']?> ></td>-->
                        <td> <input type="text"   name="nome"  value="<?=$usuario['nome']?>"></td>
                        <td> <input type="email"  name="email"  value="<?=$usuario['email']?>"></td>
                        <td> <input type="password"  name="senha"  value="<?=$usuario['senha']?>"></td>
                        <td> <input type="text"  name="telefone"  value="<?=$usuario['telefone']?>"></td>
                        <td> <input type="text"  name="cep"  value="<?=$usuario['cep']?>"></td>
                        <td> <input type="text"  name="logradouro"  value="<?=$usuario['logradouro']?>"></td>
                        <td> <input type="text"  name="numero"  value="<?=$usuario['numero']?>"></td>
                        <td> <input type="text"  name="complemento"  value="<?=$usuario['complemento']?>"></td>
                        <td> <input type="text"  name="bairro"  value="<?=$usuario['bairro']?>"></td>
                        <td> <input type="text"  name="cidade"  value="<?=$usuario['cidade']?>"></td>
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
        echo "</table> </center>";
        echo"</div>";
        ?>
    </body>
</html>
