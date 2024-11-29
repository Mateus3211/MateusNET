<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    echo 'Usuário não logado!';
    exit; // Redirecionar ou exibir mensagem caso o usuário não esteja logado
}

include(__DIR__ . '/include/conexão.php'); // Caminho para o arquivo de conexão

$usuario_id = $_SESSION['usuario_id']; // ID do usuário logado

// Busca as informações do usuário no banco de dados
$sql = "SELECT nome, email FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();

// Adicionando var_dump para depuração
if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc(); // Armazena as informações do usuário
} else {
    // Se não encontrar o usuário, exibe uma mensagem de erro e termina a execução
    $usuario = null;
    echo "Usuário não encontrado!";
    exit;  // Para o código aqui, já que não podemos continuar sem o usuário
}

// Depuração adicional (comentado caso não precise)
echo '<pre>';
var_dump($usuario); // Exibe o conteúdo da variável $usuario
echo '</pre>';

?>

