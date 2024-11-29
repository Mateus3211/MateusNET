<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MateusNet - Filmes e Séries</title>
    <link rel="stylesheet" href="assets/css/filmes_series.css">
</head>
<body>

    <!-- Barra Lateral -->
    <aside class="sidebar">
        <h2>Categorias</h2>
        <a href="#animes">Animes</a>
        <a href="#series">Séries</a>
        <a href="#filmes">Filmes</a>
        <a href="#documentarios">Documentários</a>
        <a href="#lancamentos">Lançamentos</a>
        <a href="#mais-assistidos">Mais Assistidos</a>
        <a href="#favoritos">Favoritos</a>
    </aside>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <header>
    <nav>
        <a href="index.php">Início</a>
        <a href="perfil.php">Meu Perfil</a>
        <a href="musicas.">Músicas</a>
        <a href="filmes_series.php">Filmes & Séries</a>
        <a href="login.php">Login</a>
    </nav>
    
            <div class="logo">MateusNet</div>
        </header>

        <!-- Primeira Categoria com Cartazes em Diagonal -->
        <section class="section" id="animes">
            <div class="section-title">Animes Populares</div>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="link-da-imagem.jpg" alt="Título do Anime">
                    <div class="info-overlay">
                        <h3>Título do Anime</h3>
                        <p>Ação, Aventura</p>
                    </div>
                </div>
                <!-- Mais itens de anime aqui -->
            </div>
        </section>

        <!-- Categoria de Sugestões ao Rolar a Página -->
        <div class="category-suggestions">
            <section class="category" id="filmes">
                <div class="section-title">Filmes em Destaque</div>
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="link-da-imagem.jpg" alt="Título do Filme">
                        <div class="info-overlay">
                            <h3>Título do Filme</h3>
                            <p>Fantasia, Aventura</p>
                        </div>
                    </div>
                    <!-- Mais itens de filme aqui -->
                </div>
            </section>

            <section class="category" id="series">
                <div class="section-title">Novidades em Séries</div>
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="link-da-imagem.jpg" alt="Título da Série">
                        <div class="info-overlay">
                            <h3>Título da Série</h3>
                            <p>Suspense, Mistério</p>
                        </div>
                    </div>
                    <!-- Mais itens de série aqui -->
                </div>
            </section>

            <section class="category" id="documentarios">
                <div class="section-title">Lançamentos de Documentários</div>
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="link-da-imagem.jpg" alt="Título do Documentário">
                        <div class="info-overlay">
                            <h3>Título do Documentário</h3>
                            <p>História, Biografia</p>
                        </div>
                    </div>
                    <!-- Mais itens de documentário aqui -->
                </div>
            </section>
        </div>
    </div>

</body>
</html>
