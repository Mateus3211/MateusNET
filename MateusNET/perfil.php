<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - MateusNet</title>
    <link rel="stylesheet" href="assets/css/perfil.css">
</head>
<body>
    <!-- Menu Lateral -->
    <aside class="sidebar">
        <h1>MateusNet</h1>
        <div class="nav-item">Perfil</div>
        <div class="nav-item">Serviços Ativos</div>
        <div class="nav-item">Faturas</div>
        <div class="nav-item">Configurações</div>
        <div class="nav-item">Suporte</div>
    </aside>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <div class="header">
            <div class="profile-info">
                <div class="profile-pic">
                    <?php
                    session_start();
                    
                    // Verifica se o usuário está logado
                    if (!isset($_SESSION['usuario_id'])) {
                        echo 'Usuário não logado!';
                        exit; // Redirecionar ou exibir mensagem caso o usuário não esteja logado
                    }
                
                    
                    // Garante que $usuario é definido e tem um valor antes de tentar acessar
                    if (isset($usuario['nome']) && !empty($usuario['nome'])) {
                        echo strtoupper($usuario['nome'][0]); // Exibe a letra inicial do nome
                    } else {
                        echo 'M'; // Caso não haja um nome ou usuário, exibe um M padrão
                    }
                    ?>
                </div>
                <div class="details">
                    <?php if (isset($usuario['nome']) && isset($usuario['email'])): ?>
                        <h2><?php echo htmlspecialchars($usuario['nome']); ?></h2>
                        <p>Email: <?php echo htmlspecialchars($usuario['email']); ?></p>
                    <?php else: ?>
                        <p>Usuário não encontrado.</p>
                    <?php endif; ?>
                </div>
            </div>
            <button class="btn-primary">Atualizar Perfil</button>
        </div>

        <!-- Cards Informativos -->
        <div class="card-container">
            <div class="card">
                <div class="card-title">Serviço Ativo</div>
                <div class="card-content">
                    Status: <strong>Ativo</strong><br>
                    Velocidade: 300 Mbps<br>
                    Expira em: 15/12/2024
                </div>
                <button class="btn-primary">Gerenciar</button>
            </div>

            <div class="card">
                <div class="card-title">Fatura Pendente</div>
                <div class="card-content">
                    Total: <strong>R$ 89,90</strong><br>
                    Vencimento: 10/11/2024
                </div>
                <button class="btn-primary">Pagar Agora</button>
            </div>

            <div class="card">
                <div class="card-title">Configuração de Conta</div>
                <div class="card-content">
                    Alterar senha, método de pagamento e informações de contato.
                </div>
                <button class="btn-primary">Configurar</button>
            </div>

            <div class="card">
                <div class="card-title">Suporte</div>
                <div class="card-content">
                    Contato com nossa equipe de suporte para resolver problemas e dúvidas.
                </div>
                <button class="btn-primary">Entrar em Contato</button>
            </div>
        </div>
    </main>
</body>
</html>