<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/registro.css"> <!-- Certifique-se de que o caminho está correto -->
</head>
<body>
    <div class="container">
    <form method="post" action="include/processa_registro.php">
            <h2>Registro</h2>

            <div class="input-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="input-group">
                <label for="confirma_senha">Confirmar Senha:</label>
                <input type="password" name="confirma_senha" id="confirma_senha" placeholder="Confirme sua senha" required>
            </div>

            <button type="submit" class="btn-login">Registrar</button>

            <div class="divider">ou</div>

            <div class="footer">
                Já possui uma conta? <a href="login.php">Faça login</a>
            </div>
        </form>
    </div>
</body>
</html>
