<?php
include(__DIR__ . '/conexão.php'); // Caminho correto para o arquivo de conexão
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera e limpa os dados enviados
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $confirma_senha = trim($_POST['confirma_senha']);

    // Validações básicas
    if (empty($nome) || empty($email) || empty($senha) || empty($confirma_senha)) {
        $erro = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "E-mail inválido.";
    } elseif ($senha !== $confirma_senha) {
        $erro = "As senhas não coincidem.";
    }

    // Se não houver erro, insere no banco de dados
    if (empty($erro)) {
        $sql = "SELECT id FROM usuarios WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $erro = "O e-mail já está registrado.";
        } else {
            // Cria o hash da senha e insere os dados
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nome, email, senha_hash) VALUES (?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sss", $nome, $email, $senha_hash);

            if ($stmt->execute()) {
                // Redireciona para a página inicial
                header('Location: ../login.php');
                exit;
            } else {
                $erro = "Erro ao registrar o usuário. Tente novamente.";
            }
        }
    }
}
?>



