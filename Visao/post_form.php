<?php
// Formulário para profissionais postarem seus trabalhos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    $nomePost = $_POST["nomePost"];
    $telefone = $_POST["telefone"];
    $localizacao = $_POST["localizacao"];

    $conexao = mysqli_connect('localhost','root','','saudemental'); 

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $query = "INSERT INTO postagem (titulo, conteudo, nomePost, telefone, localizacao) VALUES ('$titulo', '$conteudo', ' $nomePost', '$telefone', '$localizacao')";

    if ($conexao->query($query) === TRUE) {
        echo "
        <script>        
            alert('Dados Cadastrados com sucesso!');
            setTimeout(function() {
                window.location.href = 'postagens.php';
            }, 0000);
        </script>
        ";
    } else {
        echo '<p>Erro ao postar: ' . $conexao->error . '</p>';
    }

    $conexao->close();
}
?>

<form method="post" action="">
    <label for="titulo">Nome:</label>
    <input type="text" name="nomePost" required>

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone">
    <label for="localizacao">Localização:</label>
    <input type="text" name="localizacao">

    <label for="conteudo">Conteúdo:</label>
    <textarea name="conteudo" rows="4" required></textarea>

    <button type="submit">Postar</button>
</form>
