<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="_cdn/boot.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/Pagamento.css">
    <link rel="stylesheet" href="../_cdn/boot.css">

    <title>Formulário de Pagamento</title>
</head>

<body>

    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png" alt=""></a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="pagamento.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--FIM DOBRA CABEÇALHO-->
    <h1>Pagamento</h1>
    <div class="container">
        <form action="../Controlador/PagamentoController.php" method="POST">
            <div>
            <label for="formaPagamento">Forma de<br>Pagamento:</label>
                <select name="formaPagamento">
                    <option value="cartao">Cartão</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Informe nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf"  placeholder="Informe CPF">
            </div>
            <div class="form-group">
                <label for="numerocartao">Número do Cartão:</label>
                <input type="text" name="numerocartao"  placeholder="XXXX-XXXX-XXXX-XXXX" required>
            </div>
            <div class="form-group">
                <label for="validade">Validade:</label>
                <input type="text" name="validade"  placeholder="MM/AA" required>
            </div>
            <div class="form-group">
            <label for="cvv">CVV:</label>
                <input type="text" name="cvv" placeholder="XXX" required>
            </div>
            
            <div class="form-group">
            <label for="valor">Valor:</label>
                <select name="valor" class="valor">
                    <option value="" selected>Escolha um valor</option>
                    
                    <option value="399">R$399,00/mês</option>
                    <option value="300">Semestral = R$300,00/Mês</option>
                    <option value="249">Anual = R$249,00</option>
                    
                </select>
                
            </div>
            

            
            
            <div class="form-group_btn">
            <button type="submit">Efetuar Pagamento</button>
                <p>
                    <br><br><br>
                    
                </p>
            </div>
        </form>

    </div>


</body>

</html>