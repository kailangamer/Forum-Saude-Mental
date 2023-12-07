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
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Formulário Cadastro Profissional</title>
</head>

<body>
    <!--DOBRA CABEÇALHO-->

    <header class="main_header">
        <div class="main_header_content">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png" alt="Fórum saúde mental"
                    title="Formulário de Cadastro Profissional"></a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="cadastro.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--FIM DOBRA CABEÇALHO-->
    <h1>Formulário Cadastro</h1>
    <div class="container">
    <form action="../Controlador/cadastrarProfissional.php" method=POST>


            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"  placeholder=" Informe seu nome" required>
            </div>
            <div class="form-group">
                <label for="registro">Nº Registro:</label>
                <input type="text" id="registro" name="registro"  placeholder=" Informe seu registro" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required placeholder="Informe CPF">
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" required placeholder="Informe cnpj">
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" name="cep" required placeholder="Informe cep">
            </div>
            <!-- <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" name="rg" required placeholder="Informe RG">
            </div> -->
            <div class="form-group">
                
                <label for="endereco">Logradouro:</label>
                <input type="text" id="logradouro" name="logradouro" required placeholder="Informe Logradouro">
            
            </div>
          
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero"  placeholder="Informe Num">
            </div>
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro"  placeholder="Informe Bairro">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required placeholder="Informe Cidade">
            </div>
            <div class="form-group">
                <label for="uf">Uf:</label>
                <select name="uf" class="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone"  placeholder="Informe Telefone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Informe Email">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Informe Senha">
            </div>
            <div class="form-group">
                <select name="TipoProfissional" id="TipoProfissional">
                    <option value="medico">Médico</option>
                    <option value="nutricionista">Nutricionista</option>
                    <option value="terapeuta">Terapeuta</option>
                    <option value="psicologo">Psicologo</option>
                </select>
            </div>


            <div class="form-group_btn">
                <p>
                    <br>
                    <br>
                  <center>  <button class="submit" type="submit">Cadastrar</button></center>
                </p>
            </div>
        </form>

    </div>


</body>

</html>