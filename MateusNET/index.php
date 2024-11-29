<?php
session_start();

// Impede o acesso caso o usuário não esteja logado
if (!isset($_SESSION['usuario_id'])) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MateusNet - Serviços Premium</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">MateusNet</div>

        <!-- Se o usuário estiver logado, exibe o botão de logout -->
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <form method="POST" action="logout.php">
                <button type="submit">Sair</button>
            </form>
        <?php endif; ?>

        <nav>
            <a href="index.php">Início</a>
            <a href="perfil.php">Meu Perfil</a>
            <a href="musicas.php">Músicas</a>
            <a href="filmes_series.php">Filmes & Séries</a>
            <?php if (!isset($_SESSION['usuario_id'])): ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <!-- Seção Hero -->
    <section class="hero" id="hero">
        <h1>Bem-vindo ao MateusNet!</h1>
        <p>Internet ilimitada, músicas, filmes e séries ao seu alcance.</p>
        <button class="btn-primary" onclick="toggleHero()">Explore Agora</button>
    </section>

    <!-- Seção de Câmeras -->
    <section class="cameras-content" id="camerasContent">
        <h2>Monitoramento ao Vivo</h2>
        <p>Visualize as câmeras de segurança em tempo real.</p>
        <!-- Aqui você pode colocar a interface de visualização das câmeras -->
        <button class="btn-primary">Acessar Câmeras</button>
    </section>

    <!-- Conteúdo da tela de VPN -->
    <section class="vpn-content" id="vpnContent">
        <h2>Conecte-se à nossa VPN Premium!</h2>
        <p>Segurança, velocidade e privacidade garantidas.</p>
        <button class="btn-primary">Assine Agora</button>
    </section>

    <!-- Seção de Serviços -->
    <section class="services" id="services">
        <div class="card">
            <h3>Internet VPN</h3>
            <p>Conecte-se com segurança e alta velocidade.</p>
            <button class="btn-primary">Assinar Agora</button>
        </div>
        <div class="card">
            <h3>Músicas</h3>
            <p>Ouça suas músicas favoritas sem limites.</p>
            <a href="musicas.php">                                                             
                <button class="btn-primary">Acessar</button>
            </a>
        </div>
        <div class="card">
            <h3>Filmes & Séries</h3>
            <p>Assista aos lançamentos e clássicos.</p>
            <button class="btn-primary">Explorar</button>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>© 2024 MateusNet - Todos os direitos reservados.</p>
    </footer>

    <!-- Botão flutuante do WhatsApp -->
    <a href="https://wa.me/5581999999999" target="_blank" class="whatsapp-float">
        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp" width="30">
    </a>

    <script src="assets/js/index.js"></script>
</body>
</html>
