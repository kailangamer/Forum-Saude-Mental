<?php
// Conectar ao banco de dados e exibir postagens


$conexao = mysqli_connect('localhost','root','','saudemental'); 

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$query = "SELECT * FROM postagem ORDER BY data_postagem DESC";
$result = $conexao->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="post">';
        echo '<h2>' . $row['nomePost'] . '</h2>';
        echo '<h3>' . $row['titulo'] . '</h2>';
        echo '<p>' . $row['conteudo'] . '</p>';
        echo '<p>Telefone:' . $row['telefone'] . '</p>';
        echo '<p>Localização:' . $row['localizacao'] . '</p>';
        date_default_timezone_set('America/Sao_Paulo');
        $data_postagem = date('d/m/Y H:i:s', strtotime($row['data_postagem']));
        // date_default_timezone_set('America/sao_paulo');
        // $data_postagem = date('d/m/Y H:i:s', strtotime($row['data_postagem']));
        $hoje=date('d/m/Y'); echo  $hoje;
        echo '</div>';
    }
} else {
    echo '<p>Nenhuma postagem disponível.</p>';
}

$conexao->close();
?>
