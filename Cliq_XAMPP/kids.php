<?php
require 'flash.php';
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kids.css">
    <title>Cliq Kids - Streaming Infantil</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <nav class="navbar">
        <img src="midias\LOGO CLIQ DEFINITIVA.png" class="logo" alt="Logo Cliq Kids">
        <div class="nav-list">
            <a href="home.php">Filmes</a>
            <a href="#Series">Séries</a>
            <div class="search-wrap">
                <input type="text" id="searchInput" placeholder="Pesquisar filmes infantis" aria-label="Pesquisar">
                <ion-icon name="search" id="busca"></ion-icon>
            </div>
            <a href="kids.php">Infantil</a>
            <a href="#perfil">Perfil</a>
            <a href="logout.php">Sair</a>
        </div>
    </nav>

    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item">
                <img src="https://image.tmdb.org/t/p/original/w9kR8qbmQ01HwnvK4alvnQ2ca0L.jpg"
                    class="banner" alt="Toy Story 4">
                <p class="descricao">Toy Story 4 - Animação - 100 min - Woody e seus amigos em nova aventura!</p>
            </div>
            <div class="carousel-item">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi3AMTMVSHVG7Wi0TRaNApnjYZz75PYclyrz_83KWkKLAq_O6wEi_a4Mhx5PS1ewo-riMk1ucdegMCmrRSWvJ-zrRgN7CI68pky7atVIXRO7Q9CM0dQ9Avr7xm_iFutu-Jgi2RkT0ud2EXaKCLup7qos0wX-ay4ANicCh44ZYK_OfCa4sy11lirmhuN/s475/nemo-globo-2022-banner.jpeg"
                    class="banner" alt="Procurando Nemo">
                <p class="descricao">Procurando Nemo - Animação - 100 min - Uma aventura no fundo do mar!</p>
            </div>
            <div class="carousel-item">
                <img src="https://image.tmdb.org/t/p/original/xJWPZIYOEFIjZpBL7SVBGnzRYXp.jpg"
                    class="banner" alt="Frozen 2">
                <p class="descricao">Frozen 2 - Animação - 103 min - Elsa e Anna em nova jornada mágica!</p>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/3c/dc/09/3cdc09081f208b52d245455a6e345d4c.jpg"
                    class="banner" alt="Moana">
                <p class="descricao">Moana - Animação - 107 min - Uma aventura pelo oceano!</p>
            </div>
            <div class="carousel-item">
                <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2021/11/encanto-capa-2.jpg?ims=1210x544/filters:quality(75)"
                    class="banner" alt="Encanto">
                <p class="descricao">Encanto - Animação - 102 min - Magia e família na Colômbia!</p>
            </div>
        </div>
    </div>

    <div class="filtros">
        <div class="card" onclick="filterMovies('destaque')">
            <p>Em Destaque</p>
        </div>
        <div class="card" onclick="filterMovies('animação')">
            <p>Animação</p>
        </div>
        <div class="card" onclick="filterMovies('aventura')">
            <p>Aventura</p>
        </div>
        <div class="card" onclick="filterMovies('fantasia')">
            <p>Fantasia</p>
        </div>
        <div class="card" onclick="filterMovies('musical')">
            <p>Musical</p>
        </div>
        <div class="card" onclick="filterMovies('comédia')">
            <p>Comédia</p>
        </div>
    </div>

    <section class="recommendations">
        <br>
        <h2>🌟 Recomendações para Você</h2>
        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg" alt="Toy Story"></div>
                <div class="movie animação aventura"><img src="https://i.pinimg.com/736x/5f/fd/35/5ffd35acf966e4a11b8010c090d6aa16.jpg" alt="Procurando Nemo"></div>
                <div class="movie animação fantasia musical"><img src="https://image.tmdb.org/t/p/w500/mINJaa34MtknCYl5AjtNJzWj8cD.jpg" alt="Frozen II"></div>
                <div class="movie animação aventura musical"><img src="https://image.tmdb.org/t/p/w500/4JeejGugONWpJkbnvL12hVoYEDa.jpg" alt="Moana"></div>
                <div class="movie animação fantasia musical"><img src="https://image.tmdb.org/t/p/w500/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg" alt="Encanto"></div>
                <div class="movie animação aventura"><img src="https://upload.wikimedia.org/wikipedia/pt/d/de/Incredibles2.png" alt="Os Incríveis 2"></div>
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/gGEsBPAijhVUFoiNpgZXqRVWJt2.jpg" alt="Viva - A Vida é uma Festa"></div>
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/mFvoEwSfLqbcWwFsDjQebn9bzFe.jpg" alt="Up - Altas Aventuras"></div>
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/2H1TmgdfNtsKlU9jKdeNyYL5y8T.jpg" alt="Divertida Mente"></div>
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/npHNjldbeTHdKKw28bJKs7lzqzj.jpg" alt="Ratatouille"></div>
                <div class="movie animação fantasia"><img src="https://image.tmdb.org/t/p/w500/ym7Kst6a4uodryxqbGOxmewF235.jpg" alt="Enrolados"></div>
            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <section class="top-movies">
        <br>
        <h2>🎬 Lançamentos Infantis</h2>
        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg" alt="Red - Crescer é uma Fera"></div>
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/620hnMVLu6RSZW6a5rwO8gqpt0t.jpg" alt="Luca"></div>
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/hm58Jw4Lw8OIeECIq5qyPYhAeRJ.jpg" alt="Soul"></div>
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/w9kR8qbmQ01HwnvK4alvnQ2ca0L.jpg" alt="Toy Story 4"></div>
                <div class="movie animação aventura"><img src="https://upload.wikimedia.org/wikipedia/pt/d/de/Incredibles2.png" alt="Os Incríveis 2"></div>
                <div class="movie animação fantasia"><img src="https://image.tmdb.org/t/p/w500/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg" alt="Raya e o Último Dragão"></div>
            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <section class="outras-categorias">
        <br>
        <h2>🎪 Mais Aventuras</h2>
        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/9lOloREsAhBu0pEtU0BgeR1rHyo.jpg" alt="Meu Malvado Favorito"></div>
                <div class="movie animação comédia"><img src="https://image.tmdb.org/t/p/w500/wFSpyMsp7H0ttERbxY7Trlv8xry.jpg" alt="Monstros S.A."></div>
                <div class="movie animação aventura"><img src="https://image.tmdb.org/t/p/w500/hbhFnRzzg6ZDmm8YAmxBnQpQIPh.jpg" alt="Wall-E"></div>
                <div class="movie animação musical"><img src="https://image.tmdb.org/t/p/w500/sKCr78MXSLixwmZ8DyJLrpMsd15.jpg" alt="O Rei Leão"></div>
            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <div id="movieModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="movieTitle"></h2>

            <div id="posterContainer">
                <img id="moviePoster" src="/placeholder.svg" alt="Pôster do Filme">
            </div>

            <div id="videoContainer" style="display: none;">
                <iframe id="videoPlayer" width="100%" height="315" frameborder="0" allowfullscreen></iframe>
            </div>

            <div id="movieInfo">
                <p id="movieSynopsis"></p>
                <p id="movieDuration"></p>
            </div>

            <button id="watchTrailer" class="modal-btn">Ver Trailer</button>
            <button id="watchMovie" class="modal-btn">Assistir</button>
        </div>
    </div>

    <footer class="footer">
        <p>© 2025 - CLIQ Kids Streaming 🌈</p>
    </footer>
</body>
<script src="kids.js"></script>

</html>
