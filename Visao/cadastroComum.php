<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../_cdn/boot.css" rel="stylesheet">
    <link rel="stylesheet" href="../_cdn/fonticon.css" >
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/formulario.css">
    

    <title>Formulário Cadastro Comum</title>
</head>
<body>
<header class="main_header">
        <div class="main_header_content">
            <a href="../index.html" class="logo">
                <img class="logo1" src="../img/logo.png" alt="Bem vindo ao projeto prático Html5 e Css3 Essentials"
                    title="Bem vindo ao projeto prático Html5 e Css3 Essentials"></a>
                    

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="cadastro.php">Voltar</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>

    <h1>Formulário Cadastro</h1>
    <div class="container">
        <form action="../Controlador/cadastrarUsuarioComum.php" method=POST>

            <div class="form-group">
                <label for="nome">Apelido:</label>
                <input type="text" name="apelido" placeholder="Informe Nome/Apelido" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required placeholder="Informe Email">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required placeholder="Informe Senha">
            </div>
            <!-- <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required placeholder="Confirme Senha">
            </div> -->


            <div class="form-group_btn">
                <p>
                    <br>
                    <button class="submit" type="submit">Cadastrar</button>
                </p>
            </div>

        </form>

    </div>


</body>
</html>