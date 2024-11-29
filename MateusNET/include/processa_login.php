<?php
include(__DIR__ . '/conexão.php'); // Caminho correto para o arquivo de conexão

// Verifica se a sessão já foi iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$erro = ''; // Inicializa sem erro

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if (!empty($email) && !empty($senha)) {
        // Busca o usuário pelo email
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            // Verifica a senha
            if (password_verify($senha, $usuario['senha_hash'])) {
                // Armazena os dados do usuário na sessão
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];

                // Redireciona para a página principal
                header('Location: ../index.php');
                exit;
            } else {
                $_SESSION['erro'] = "Senha inválida."; // Armazena o erro na sessão
                header('Location: ../login.php');
                exit;
            }
        } else {
            $_SESSION['erro'] = "Usuário não encontrado."; // Armazena o erro na sessão
            header('Location: ../login.php');
            exit;
        }
    } else {
        $_SESSION['erro'] = "Preencha todos os campos."; // Armazena o erro na sessão
        header('Location: ../login.php');
        exit;
    }
}
?>
