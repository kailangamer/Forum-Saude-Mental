<?php
require_once "logica-usuario.php"; 
require_once '../Model/PagamentoDTO.php';
require_once '../Model/PagamentoDAO.php'; 


$idPagamento = $_GET['idPagamento'];
$dao= new PagamentoDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $numerocartao = $_POST['numerocartao'];
    $validade = $_POST['validade'];
    $cvv = $_POST['cvv'];
    $formaPagamento = $_POST['formaPagamento'];
    $valor = $_POST['valor'];
    $pagamento = $_POST['pagamento'];

    $pagamentoDTO = new PagamentoDTO();
    $pagamentoDTO->setIdPagamento($idPagamento);
    $pagamentoDTO->setNome($nome);
    $pagamentoDTO->setCpf($cpf);
    $pagamentoDTO->setNumerocartao($numerocartao);
    $pagamentoDTO->setValidade($validade);
    $pagamentoDTO->setCvv($cvv);
    $pagamentoDTO->setFormaPagamento($formaPagamento);
    $pagamentoDTO->setValor($valor);
    $pagamentoDTO->setPagamento($pagamento);
    $dao->alterarPagamento($idPagamento, $pagamentoDTO);
    
    header("location: ../Visao/gerenciarPagamento.php");
}
else {
    $pagamento = $dao->listarPagamentoPorId($idPagamento);
    
    if (!$pagamento) {
        header("location: ../Visao/gerenciarPagamento.php");
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
                  
                    
                    <li><a href="../Visao/gerenciarPagamento.php">Voltar</a></li>
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

        <input type="hidden" name="idUsuario" value="<?=$pagamento['idPagamento']?>">
        <input type="text"   name="apelido"  value="<?=$pagamento['nome']?>">
        <input type="email" name="email"  value="<?=$pagamento['cpf']?>">

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
   
      
            $pagamentoDTO = new PagamentoDTO();
            $pagamentoDAO = new PagamentoDAO();
            $array= $pagamentoDAO->listarPagamento();          
       
                    echo "<center><table border='1' style='border:1px outset #678eab'>";
                    echo "<tr bgcolor='#678eab'>";
                   // echo "<th>idUsuario</th>";
                    echo "<th>nome</th>";
                    echo "<th>cpf</th>";
                    echo "<th>numerocartao</th>";
                    echo "<th>validade</th>";
                    echo "<th>cvv</th>";
                    echo "<th>formaPagamento</th>";
                    echo "<th>pagamento</th>";
                
                    echo "<th>Alterar</th>";
                    echo "</tr>";
                     ?> <form action="" method="post">

                            <tr>
                               <!-- <td><input type="hidden"  name="idUsuario" valuepagamento['idPagamento']?> ></td>-->
                                <td> <input type="text"   name="nome"  value="<?=$pagamento['nome']?>"></td>
                                <td> <input type="text"  name="cpf"  value="<?=$pagamento['cpf']?>"></td>
                                <td> <input type="text"  name="numerocartao"  value="<?=$pagamento['numerocartao']?>"></td>
                                <td> <input type="text"  name="validade"  value="<?=$pagamento['validade']?>"></td>
                                <td> <input type="text"  name="cvv"  value="<?=$pagamento['cvv']?>"></td>
                                <td> <input type="text"  name="formaPagamento"  value="<?=$pagamento['formaPagamento']?>"></td>
                                <td> <input type="text"  name="pagamento"  value="<?=$pagamento['pagamento']?>"></td>
                                <!-- <td> <input type="text"  name="valor"  value="?=$pagamento['valor']?>"></td> -->
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
