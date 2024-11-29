<?php
include(__DIR__ . '/include/conexão.php');


// Consultar músicas no banco de dados
$sql = "SELECT * FROM musicas";
$resultado = $conexao->query($sql);

// Verificar se a consulta foi bem-sucedida
if (!$resultado) {
    die("Erro ao consultar o banco de dados: " . $conexao->error);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reprodutor de Músicas</title>
    <link rel="stylesheet" href="assets/css/musicas.css"> 
    <script src="player.js" defer></script>
</head>
<body>
    <header>
        <h1>Reprodutor de Músicas</h1>
    </header>

    <main>
        <div class="music-container">
            <?php
            // Verificar se há músicas no resultado
            if ($resultado->num_rows > 0) {
                // Exibir cada música
                while ($musica = $resultado->fetch_assoc()) {
                    // Verificar se o arquivo existe
                    if (isset($musica['caminho_arquivo']) && !empty($musica['caminho_arquivo'])) {
                        echo "<div class='music-card'>
                                <h3>" . htmlspecialchars($musica['titulo']) . "</h3>
                                <audio controls>
                                    <source src='/MateusNET/" . htmlspecialchars($musica['caminho_arquivo']) . "' type='audio/mpeg'>
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                              </div>";
                    } else {
                        echo "<div class='music-card'>
                                <p>Arquivo de áudio não encontrado.</p>
                              </div>";
                    }
                }
            } else {
                echo "<p>Nenhuma música encontrada.</p>";
            }

            // Fechar a conexão
            $conexao->close();
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 MateusNET. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
