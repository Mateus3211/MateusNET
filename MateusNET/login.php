<?php
session_start();

// Se o usuário já estiver logado, redireciona para a página principal
if (isset($_SESSION['usuario_id'])) {
    header('Location: index.php');  // Redireciona para a página principal
    exit;
}

$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : ''; // Recupera o erro da sessão, se existir

// Limpa o erro após exibi-lo
if (!empty($erro)) {
    unset($_SESSION['erro']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css"> <!-- Certifique-se de que o caminho está correto -->
</head>
<body>
    <div class="container">
        <form method="post" action="include/processa_login.php">
            <h2>Login</h2>
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <button type="submit" class="btn-login">Entrar</button>

            <!-- Exibe a mensagem de erro apenas se houver e o formulário foi enviado -->
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($erro)) : ?>
                <p class="error"><?= htmlspecialchars($erro); ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
