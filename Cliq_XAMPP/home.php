<?php
require 'flash.php';
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cliq - Streaming de Filmes</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <nav class="navbar">
        <img src="midias\LOGO CLIQ DEFINITIVA.png" class="logo" alt="Logo Cliq">
        <div class="nav-list">
            <a href="#filmes">Filmes</a>
            <a href="#series">Séries</a>
            <div class="search-wrap">
                <input type="text" id="searchInput" placeholder="Pesquisar filmes ou séries" aria-label="Pesquisar">
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
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/um-filme-minecraft/ca6ff5b1-6f3d-4c13-b451-ebe5a04a2b81.webp"
                    class="banner" alt="Manicraft">

            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/uma-batalha-apos-a-outra/ee5a48d2-80c6-43c4-97d6-e84b291b2129.webp"
                    class="banner" alt="Imagem 2 do Carrossel">

            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/os-caras-malvados-2/8894e786-d84b-4601-a5d1-32008a21e88d.webp"
                    class="banner" alt="Imagem 3 do Carrossel">

            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/missao-pet/02b03f65-5324-464a-9036-cdf6371fd1ac.webp"
                    class="banner" alt="Imagem 4 do Carrossel">

            </div>
            <div class="carousel-item">
                <img src="https://m.media-amazon.com/images/S/pv-target-images/594fc8990b807e512d2a202b00a126ac8ed0499aad8fa567943ec5bd0b0b726b._SX1080_FMjpg_.jpg"
                    class="banner" alt="Imagem 5 do Carrossel">
                <p class="descricao">The Batman (2022) - Ação - 176 min - Batman investiga crimes em Gotham.</p>
            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/demon-slayer-kimetsu-no-yaiba-castelo-infinito/0c46cff9-ef6d-439d-8878-ec4e973515ce.webp"
                    class="banner" alt="Imagem 6 do Carrossel">
                <p class="descricao">Spider-Man: No Way Home (2021) - Ação - 148 min - Multiverso em ação.</p>
            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/como-treinar-o-seu-dragao-2025/4b067f1c-f99f-4c46-bd2d-23539b28b76a.webp"
                    class="banner" alt="Imagem 7 do Carrossel">
                <p class="descricao">Avatar: The Way of Water (2022) - Aventura - 192 min - Retorno a Pandora.</p>
            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/lilo-e-stitch/f8608ffd-a4a1-4d35-9d10-cc09edd22ec9.webp"
                    class="banner" alt="Imagem 8 do Carrossel">
                <p class="descricao">Top Gun: Maverick (2022) - Ação - 130 min - Missões aéreas intensas.</p>
            </div>
            <div class="carousel-item">
                <img src="https://ingresso-a.akamaihd.net/prd/img/movie/jujutsu-kaisen-hidden-inventory-premature-death/12ecb7f9-15ea-413f-b94b-b5b89a698e32.webp"
                    class="banner" alt="Imagem 9 do Carrossel">
                <p class="descricao">Black Panther: Wakanda Forever (2022) - Ação - 161 min - Herança real.</p>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/ca/3d/d2/ca3dd24c5181b47371e587c9d68e3334.jpg" class="banner"
                    alt="Imagem 10 do Carrossel">
                <p class="descricao">Encanto (2021) - Animação - 102 min - Magia na família Madrigal.</p>
            </div>
        </div>
    </div>

    <div class="filtros">
        <div class="card" onclick="filterMovies('destaque')">
            <p>Em Destaque</p>
        </div>
        <div class="card" onclick="filterMovies('ficção')">
            <p>Ficção Científica</p>
        </div>
        <div class="card" onclick="filterMovies('terror')">
            <p>Terror</p>
        </div>
        <div class="card" onclick="filterMovies('ação')">
            <p>Ação</p>
        </div>
        <div class="card" onclick="filterMovies('drama')">
            <p>Drama</p>
        </div>
        <div class="card" onclick="filterMovies('comédia')">
            <p>Comédia</p>
        </div>
        <div class="card" onclick="filterMovies('animação')">
            <p>Animação</p>
        </div>
    </div>

    <section class="recommendations">
        <br>
        <h2>Recomendações para Você</h2>
        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie ação"><img src="https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg"
                        alt="Vingadores "></div>
                <div class="movie ficção"><img
                        src="https://img.elo7.com.br/product/zoom/2677A6D/big-poster-filme-homem-aranha-de-volta-ao-lar-lo10-90x60-cm-marvel.jpg"
                        alt="Homem aranha"></div>
                <div class="movie animação"><img
                        src="https://cdn.cinematerial.com/p/297x/gbytp3gv/gekijo-ban-kimetsu-no-yaiba-mugen-jo-hen-japanese-movie-poster-md.jpg?v=1746664401"
                        alt="Pôster de Animação"></div>
                <div class="movie drama"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgxUQJRREypQZwd76IetskPzTyfMB2V8buDb7tJfKVj8zrW8prqsdy90WlpmqTMJ-vG8KV0HRczuXLRImEg9b3mTb_NyNjF71t57obT0ZdwZFFmnQS2nx_mM1WTF_9eN0N8d0cU7OQ1amnt/s1600/drama-final41.jpg"
                        alt="Drama"></div>
                <div class="movie comédia"><img
                        src="https://http2.mlstatic.com/D_NQ_NP_991525-MLA80251322988_112024-OO.jpg"
                        alt="Todo mundo em Panico"></div>
                <div class="movie terror"><img
                        src="https://uauposters.com.br/media/catalog/product/cache/1/small_image/333x500/9df78eab33525d08d6e5fb8d27136e95/7/7/770020150308-uau-posters-filmes-terror-annabelle.jpg?v=1746664401"
                        alt="Anabelle"></div>
                <div class="movie ação"><img
                        src="https://img.elo7.com.br/product/zoom/46CCBC1/poster-filme-batman-o-cavaleiro-das-trevas-a2-60x42-cm-lo02-decoracao-quarto-nerd.jpg"
                        alt="Batman"></div>
                <div class="movie ficção"><img
                        src="https://br.web.img3.acsta.net/medias/nmedia/18/91/79/19/20163665.jpg"
                        alt="Homem de ferro "></div>
                <div class="movie animação"><img
                        src="https://ovicio.com.br/wp-content/uploads/2019/09/20190915-spider-man-into-the-spider-verse-poster-martin-ansin-mondo-683x1024.jpg"
                        alt="Homem aranha no aranha verso "></div>
                <div class="movie comédia"><img
                        src="https://i0.wp.com/sitedosgeeks.com/wp-content/uploads/2019/08/Captura-de-Tela-2019-08-14-%C3%A0s-18.11.44.png?resize=497%2C728"
                        alt="Parças 2 "></div>
                <!-- Adicionados mais filmes para Recomendações -->
                <div class="movie ação"><img src="https://cinepop.com.br/wp-content/uploads/2020/10/elm-2.jpg"
                        alt="Hora do pesadelo"></div>
                <div class="movie ficção"><img
                        src="https://www.geekmagazine.com.br/wp-content/uploads/2023/01/23839ced-9d86-47f8-8150-afb9be99fd23-7320-00001420343881b1_file.webp"
                        alt="Homem formiga e a vespa"></div>
                <div class="movie terror"><img
                        src="https://img.elo7.com.br/product/zoom/269D300/big-poster-nos-filme-lo01-tamanho-90x60-cm-presente-geek.jpg"
                        alt="US"></div>
                <div class="movie drama"><img
                        src="https://cdn.posteritati.com/posters/000/000/074/570/hard-truths-md-web.jpg"
                        alt="Hard Truths"></div>
                <div class="movie drama"><img
                        src="https://www.cinemadebuteco.com.br/wp-content/uploads/2013/12/The-Master-Filme-Poster-580x812.jpg"
                        alt="The master "></div>
                <div class="movie drama"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhOXyBC2XU_co0bAmXpVJvNsBEBk1lK4T6UXdt2xAkQjtaT19xN0sJL1J1bya4j_nsBvIa-hbC0A3mnmtqFyNfjsicQ6vMNGL8wGNGtRp61jTxkM-cIPuiIHSYjSRy1QbnUy_IyDr0mGTb_/s1600/zzzz.jpg"
                        alt="Duas rainhas "></div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKFatjbQFfMD8z5faS_K5oAWc1MroUGmtSvQ&s"
                        alt="Uma prova de coragem "></div>
                <div class="movie drama"><img
                        src="https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/86/96/34/20028591.jpg"
                        alt="A procura de uma verdade "></div>
                <div class="movie drama"><img
                        src="https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/8961/filme_8961.jpg"
                        alt="O milagre azul ">
                </div>
                <div class="movie drama"><img
                        src="https://i0.wp.com/cinemaplay.com.br/wp-content/uploads/2024/11/todo-tempo-que-temos.jpg?fit=400%2C570&ssl=1"
                        alt="Todo tempo que temos "></div>
                <div class="movie comédia"><img
                        src="https://cinepop.com.br/wp-content/uploads/2020/11/a-sogra-perfeita.jpg"
                        alt="Uma sogra perfeita "></div>
                <div class="movie comédia"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgHExdug7idqffs9DHgBg8T9SNeeXMfe4so3eFN8xHxxOEmK6jqijqEPMAy7e86-0fUmVzW2pUXSp8br6spo-vBXavcISm31NHLA1KW_-xPVofIAg5mNZqQ8qqpwSSv2crMZJKRbvQkoLI/s1600/release1.jpg"
                        alt="Aprendiz de espiã "></div>
                <div class="movie comédia"><img
                        src="https://i.pinimg.com/736x/b6/38/9b/b6389b093e6be5dc0ee556708557a2c7.jpg"
                        alt="As loucuras de Dick e Jane "></div>
                <div class="movie comédia"><img
                        src="https://br.web.img2.acsta.net/medias/nmedia/18/95/45/36/20405014.jpg"
                        alt="Vai que da certo  "></div>
                <div class="movie comédia"><img
                        src="https://pbs.twimg.com/media/EIoMHWGXsAAXV5Z?format=jpg&name=900x900" alt="Jojo rabbit ">
                </div>
                <div class="movie comédia"><img
                        src="https://cinemacao.com/wp-content/uploads/2015/01/deixarolar-poster.jpg"
                        alt="Deixa rolar  "></div>
                <div class="movie comédia"><img
                        src="https://cinepop.com.br/wp-content/uploads/2023/02/feriastrocadas_1.jpg"
                        alt="Férias trocadas  "></div>
                <div class="movie comédia"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0NMMdh3TozsWDHVxZwk2W_rOPuBmP0X85UA&s"
                        alt="o que mora ao lado "></div>
                <div class="movie animação"><img
                        src="https://m.media-amazon.com/images/I/71-R9eJhgGL._UF894,1000_QL80_.jpg" alt="Elio Friends">
                </div>
                <div class="movie animação"><img src="https://www.europanet.com.br/upload/id_produto/107___/107354g.jpg"
                        alt="Elementos"></div>
                <div class="movie animação"><img
                        src="https://i.pinimg.com/474x/1d/c8/09/1dc8098df672a11367e754fc01ac5f0e.jpg"
                        alt="Up altas aventuras "></div>
                <div class="movie animação"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/one-piece-film-red/a414c8de-1345-4a0f-87f6-0244ca56505e.jpg"
                        alt="One piece red "></div>
                <div class="movie animação"><img
                        src="https://gqcanimes.com.br/wp-content/uploads/2024/01/O-Menino-e-a-Garca-novo-teaser-e-poster-nacional-do-filme-anime-jpg.webp"
                        alt="O menino e a garça "></div>
                <div class="movie animação"><img
                        src="https://image.tmdb.org/t/p/original/eqw2liU8vZivyShbVhOFRISYIkp.jpg"
                        alt="Pokemon e o segredo da selva"></div>
                <div class="movie animação"><img
                        src="https://animefans.com.br/wp-content/uploads/2018/04/Poster-do-filme-de-Dragon-Ball-Super-1-1.jpg"
                        alt="Dragão ball z super "></div>

                <div class="movie ação"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV3uvnsicqcZVzp7BhT5LWzwwrfTI6MzD15g&s"
                <div class="movie ficção"><img
                        src="https://i.etsystatic.com/36541132/r/il/72181f/7047437338/il_570xN.7047437338_fncs.jpg"
                        alt="Interstellar"></div>
                <div class="movie terror"><img src="https://i.ebayimg.com/images/g/vGAAAeSwTVRomQxj/s-l400.jpg"
                        alt="Weapons">
                </div>
                <div class="movie terror"><img src="https://cinepop.com.br/wp-content/uploads/2020/05/escolhida.jpeg"
                        alt="Antebellum"></div>
                <div class="movie drama"><img
                        src="https://isaworldblog.wordpress.com/wp-content/uploads/2015/09/um-olhar-do-parac3adso.jpg"
                        alt="Um olhar no paraíso "></div>
                <!-- Adicionados mais filmes para terror -->
                <div class="movie terror"><img
                        src="https://cineacessivel.com.br/uploads/movies/o-malvado-terror-no-natal1702472594.png"
                        alt="O malvado horror de natal"></div>
                <div class="movie terror"><img
                        src="https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-03783-eaf38fcea91cd7033417250162105466-480-0.jpg"
                        alt="Terrivel"></div>
                <div class="movie terror"><img
                        src="https://i.pinimg.com/236x/4b/00/f1/4b00f1720e42be5fa3784981a223ceb5.jpg" alt="Hereditário">
                </div>
                <div class="movie terror"><img
                        src="https://br.web.img3.acsta.net/c_310_420/pictures/14/06/17/20/27/286744.jpg" alt="Dracula">
                </div>
                <div class="movie terror"><img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/23888-cartaz.jpg"
                        alt="O terceiro andar"></div>
                <div class="movie terror"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEifl087-ztiO-9Yn_VCfXyML0COjzoiurOzpzkt1KCqN-LOPr7qeGloTHGfHDqg9lemLL7khIG8Lwo9nd6FWfOnfeWapBm5c7VW1g43nMaS4XqDPuVCQfovOf0J8OW8ilx8w03mn40an0_3xIiPW1Ndl7hPe7jVq1UKHE6d1iAooKYoFREaGsYqCBbfzXlT/w280/asmntdml01a.jpg"
                        alt="semente do mal "></div>
                <div class="movie terror"><img
                        src="https://cineset.com.br/wp-content/uploads/2024/05/poster-de-imaculada-filme-terror-1.jpg"
                        alt="imaculada"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN-dIa6dDA07ExxOQKmXNVVHWCliN6VBrMcQ&s"
                        alt="Infestaçao"></div>
                <div class="movie terror"><img
                        src="https://marketplace.canva.com/EAEbUqVjRds/1/0/1131w/canva-assustador-filme-de-terror-teaser-cartaz-24KNYk2fSTc.jpg"
                        alt="Na toca do coelho"></div>
                <div class="movie terror"><img src="https://mid-noticias.curitiba.pr.gov.br/2022/00359361.jpg"
                        alt="o ultimo aviso"></div>
                <div class="movie terror"><img
                        src="https://s2-globo-play.glbimg.com/XFn9fbhyAfuFOuCP_w98SvjO6U0=/362x536/https://s2-globo-play.glbimg.com/dYY0EGmtCrpCEw1hnwUojnPdi-s=/https://s2.glbimg.com/z_Uzspys4z-VXk0nnP7yfU8xuxE=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2025/V/w/WJw4PJSbWyEYEyZPNKnQ/2025-4958-swing-em-busca-do-prazer-poster.jpg"
                        alt="Swing"></div>
                <div class="movie drama"><img
                        src="https://s2-globo-play.glbimg.com/00TWOFhalr0jaQ0p5GGlXXN1pUE=/https://s2.glbimg.com/e4ni-Kdx-jmpBlGBI2VJXRIBCDM=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2025/I/d/BlZAlYQ9AqMTCD1dtyUQ/10510237-poster.jpg"
                        alt="Armadilhas do passado"></div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk2zyQFVnPdc1j1-Jl6QRwNiq2mLAHzCSBoA&s"
                        alt="O preço da verdade "></div>
                <div class="movie drama"><img
                        src="https://www.papodecinema.com.br/wp-content/uploads/2025/10/20251007-eu-nao-te-ouco-papo-de-cinema-cartaz.webp"
                        alt="Eu não te ouço "></div>
                <div class="movie comédia"><img
                        src="https://media-cache.cinematerial.com/p/500x/kizmupvy/running-point-movie-poster.jpg?v=1737479480"
                        alt="Running Point"></div>
                <div class="movie comédia"><img
                        src="https://http2.mlstatic.com/D_NQ_NP_777479-MLB43190928095_082024-OO.jpg" alt="espertalhões">
                </div>
                <div class="movie comédia"><img
                        src="https://pbs.twimg.com/media/CplzLR_XYAAzNYn?format=jpg&name=4096x4096" alt="é fada"></div>
                <div class="movie comédia"><img
                        src="https://www.atoupeira.com.br/wp-content/uploads/2019/04/Cartaz-Socorro-Virei-Uma-Garota.jpg"
                        alt="Socorro virei uma garota "></div>
                <div class="movie comédia"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmbdxj_E15Us7k_huNa_OmCdcZfcfvYu0uAQ&s"
                        alt="Um dia cinco estrelas"></div>
                <div class="movie comédia"><img
                        src="https://s2-globo-play.glbimg.com/E1W5JrjyFT-qTGPS-UEKMhHZO98=/362x536/https://s2-globo-play.glbimg.com/1rsMGFG9bGLmYnJIBNXSdhpzTRY=/https://s2.glbimg.com/N2eOBgfkzfMu6Shr59Qvsnxsjfc=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2025/Y/L/aNthIATluU99PW7N6OsA/2025-4772-os-farofeiros-2-poster.jpg"
                        alt="Os farofeiros 2"></div>
                <div class="movie comédia"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/faz-de-conta-que-e-paris/9f078d0d-6c32-4023-b875-2b4efbb42aa2.webp"
                        alt="Faz de conta que é Paris"></div>
                <div class="movie comédia"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/4/47/A_Com%C3%A9dia_Divina.jpg"
                        alt="comédia divina"></div>

                <div class="movie animação"><img
                        src="https://img.elo7.com.br/product/zoom/2C150E0/big-poster-filme-anime-akira-lo001-tamanho-90x60-cm-manga.jpg"
                        alt="Akira"></div>
                <div class="movie animação"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZblffdo8UKIAQXH9GeGar-TnlUpVN28jEWg&s"
                        alt="Encanto"></div>
                <div class="movie animação"><img
                        src="https://pausadramatica.com.br/wp-content/uploads/2019/05/05a_pnut_domteaser_brazil.jpg"
                        alt="Dois Irmãos uma jornada fantastica"></div>
                <div class="movie animação"><img
                        src="https://images.justwatch.com/poster/300803737/s166/jujutsu-kaisen-0-the-movie"
                        alt="Jujutsu kaisen"></div>
                <div class="movie animação"><img
                        src="https://imusic.b-cdn.net/images/item/original/945/5022366714945.jpg?one-punch-man-season-1-epis-2020-one-punch-man-collection-dvd&class=scaled&v=1578997850"
                        alt="One punch man "></div>
                <div class="movie ação"><img
                        src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/617c0a17597637.562bc1556d7d1.jpg"
                        alt="Inception"></div>
                <div class="movie ficção"><img
                        src="https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/9834/filme_9834.jpg"
                        alt="Thor Amor e Trovão"></div>
                <div class="movie terror"><img src="https://br.web.img2.acsta.net/pictures/24/01/04/14/48/2533514.png"
                        alt="Luta no Trem"></div>
                <!-- Adicionados mais filmes para terror -->
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSPAhsKLErWans8xlTnMl3tiqbJGc7xAX5_A&s"
                        alt="Luz do demonio"></div>
                <div class="movie terror"><img
                        src="https://i.pinimg.com/736x/b1/18/6d/b1186d6da2dfb2e2d648252aa4976a4a.jpg" alt="the shining">
                </div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYcmgDOnf9fkY5GbpPs53UNjlH3j7jUKoqZg&s"
                        alt="Panico"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZC0C0ZVpF4x4r2H7EeT95WV4aZpxf948oZA&s"
                        alt="Bom menino "></div>
                <div class="movie terror"><img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/23888-cartaz.jpg"
                        alt="O terceiro andar"></div>
                <div class="movie terror"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEifl087-ztiO-9Yn_VCfXyML0COjzoiurOzpzkt1KCqN-LOPr7qeGloTHGfHDqg9lemLL7khIG8Lwo9nd6FWfOnfeWapBm5c7VW1g43nMaS4XqDPuVCQfovOf0J8OW8ilx8w03mn40an0_3xIiPW1Ndl7hPe7jVq1UKHE6d1iAooKYoFREaGsYqCBbfzXlT/w280/asmntdml01a.jpg"
                        alt="semente do mal "></div>
                <div class="movie terror"><img
                        src="https://cineset.com.br/wp-content/uploads/2024/05/poster-de-imaculada-filme-terror-1.jpg"
                        alt="imaculada"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN-dIa6dDA07ExxOQKmXNVVHWCliN6VBrMcQ&s"
                        alt="Infestaçao"></div>
                <div class="movie terror"><img
                        src="https://marketplace.canva.com/EAEbUqVjRds/1/0/1131w/canva-assustador-filme-de-terror-teaser-cartaz-24KNYk2fSTc.jpg"
                        alt="Na toca do coelho"></div>
                <div class="movie terror"><img src="https://mid-noticias.curitiba.pr.gov.br/2022/00359361.jpg"
                        alt="o ultimo aviso"></div>
                <div class="movie terror"><img
                        src="https://br.web.img3.acsta.net/c_310_420/pictures/23/07/27/16/18/3077587.jpg"
                        alt="Fale comigo"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMgkhQDuUfP0-OXa2BnsQV-4a0suy-DhjRaA&s"
                        alt="Silent hill"></div>
                <div class="movie ficção"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSPAhsKLErWans8xlTnMl3tiqbJGc7xAX5_A&s"
                        alt="Luz do demonio"></div>
                <div class="movie ficção"><img
                        src="https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-03716-7f5d61ff11271e918c17182005314343-480-0.jpg"
                        alt="Alien Romulos ">
                </div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/564x/dc/44/a7/dc44a7082b2eab41e6552d531199b774.jpg" alt="Robocop">
                </div>
                <div class="movie ficção"><img
                        src="https://cinema10.com.br/upload/filmes/filmes_9889_animais-fantasticos-os-segredos-de-dumbledore.jpg"
                        alt=" os segredos de dumbledore"></div>
                <div class="movie ficção"><img
                        src="https://http2.mlstatic.com/D_NQ_NP_961041-MLA74588209672_022024-O-pster-cinema-filme-ficco-o-exterminador-do-futuro-8.webp"
                        alt="Exterminador"></div>
                <div class="movie ficção"><img
                        src="https://cinema10.com.br/upload/featuredImage.php?url=https%3A%2F%2Fcinema10.com.br%2Fupload%2Ffilmes%2Ffilmes_10681_5131857.jpg-r_1920_1080-f_jpg-q_x-xxyxx.jpg"
                        alt="Selva Selvagem "></div>
                <div class="movie ficção"><img src="https://cinema10.com.br/upload/filmes/filmes_12810_01-1.jpg"
                        alt="Jurassic Word Domínio"></div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/564x/dc/44/a7/dc44a7082b2eab41e6552d531199b774.jpg" alt="Robocop">
                </div>
                <div class="movie ação"><img
                        src="https://br.web.img3.acsta.net/c_310_420/pictures/22/02/14/18/29/1382589.png"
                        alt="Doutor estranho Multiverso da Loucura"></div>
                <div class="movie ação"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/5/59/Captain_Marvel_%282018%29.jpg"
                        alt="Capitã Marvel"></div>
                <div class="movie ação"><img
                        src="https://i0.wp.com/cebolaverde.com.br/wp-content/uploads/2022/08/Poster-Nacional-A-Queda-65x95cm-P.jpg?ssl=1"
                        alt="A queda "></div>
                <div class="movie ação"><img src="https://cinepop.com.br/wp-content/uploads/2023/06/kraven_2.jpg"
                        alt="Kraven o caçador"></div>

            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <section class="top-movies">
        <br>
        <h2>Lançamentos</h2>

        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie ação"><img src="https://cineesmeralda.com.br/assets/extra/posters/poster-497.jpg"
                        alt="Quarteto Fantastico"></div>
                <div class="movie ficção"><img
                        src="https://m.media-amazon.com/images/M/MV5BMjIyNjZmOTEtYWFiYS00YzRhLThhMTktMDUwN2Q3ZDgzZmJmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                        alt="Capitão América"></div>
                <div class="movie animação"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvjTPlUHIgqjiI-2MAQlDt-0uBzw7G92Ur4w&s"
                        alt="Toy stor 4  "></div>
                <div class="movie terror"><img
                        src="https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-03736-0c9fa69c6909c1026017211500446414-480-0.jpg"
                        alt="Alien"></div>
                <div class="movie ação"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/corra-que-a-policia-vem-ai/d70fbe61-37ba-46d4-a7e6-a413092333b4.webp"
                        alt="Corra que a polícia vem aí"></div>
                <div class="movie ficção"><img src="https://ingresso-a.akamaihd.net/b2b/production/uploads/articles-content/8923869c-f8a6-4258-ba74-4170bf7fb202.jpg" alt="Superman">
                </div>
                <div class="movie drama"><img
                        src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/dramatic-movie-poster-template-design-9dcac1017cfed9ae8cbf5cd5b67e70ee_screen.jpg?ts=1637034852"
                        alt="Dark secret"></div>
                <div class="movie animação"><img
                        src="https://lumiere-a.akamaihd.net/v1/images/mundo_estranho_poster_brazil_1_d89cc952.jpeg?region=0,0,800,1000"
                        alt="Mundo estranho "></div>
                <!-- Adicionados mais filmes para Lançamentos -->
                <div class="movie comédia"><img
                        src="https://c8.alamy.com/comp/2SR91A9/cheech-chongs-last-movie-2025-directed-by-david-bushell-and-starring-cheech-marin-tommy-chong-and-lou-adler-this-feature-length-documentary-chronicles-the-legendary-stoner-comedy-duos-five-decade-career-through-archival-footage-animated-sequences-and-interviews-us-one-sheet-poster-editorial-use-only-credit-bfa-keep-smokin-2SR91A9.jpg"
                        alt="Cheech & Chong's Ultimo Filme"></div>
                <div class="movie animação"><img src="https://i.ebayimg.com/images/g/T9oAAOSwjNNndhXC/s-l400.png"
                        alt="Luz no Mundo"></div>
                <div class="movie ficção"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/ladroes/ca652d93-444d-4822-b7ea-e5d5d5d52643.webp"
                        alt="Ladrões"></div>
                <div class="movie terror"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKA1OYpArCeYYRH6djxTu7NVvjr0Wd9ShpxfWIh01AqYGj2JcIux429xq3QDwT_1mIvgUKqtgC0gj2n679Ep_IQmaHCyOed-BkFNOfJ8vxxvn0bYT7oJzoBZSKkInQWvkifWrwUms4hv8OUKZgStFiafoz-T8uATMRoqvCxY49hv4-AcQ4O8sqN1WhUQ/s800/sbrntrlprtverm01.jpg"
                        alt="Sobrenatural "></div>
                <div class="movie drama"><img
                        src="https://cdn.textstudio.com/output/studio/template/preview/stamped/w/f/q/d/41bdqfw.webp"
                        alt="Shede of Minds"></div>
                <div class="movie drama"><img
                        src="https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-00353-c5f7ae05d84d6b4e7f17182005314343-480-0.webp"
                        alt="The goodfather 50 years"></div>
                <div class="movie drama"><img
                        src="https://www.papodecinema.com.br/wp-content/uploads/2025/09/20250922-uma-batalha-apos-a-outra-papo-de-cinema-cartaz.webp"
                        alt="Uma batalha após a outra"></div>
                <div class="movie drama"><img src="https://m.media-amazon.com/images/I/71UxD3Tup6L._AC_SL1500_.jpg"
                        alt="O trauma show"></div>
                <div class="movie drama"><img
                        src="https://s2-globo-play.glbimg.com/l-A-ctgoWeKd9RtP0wuK6q4-R2c=/362x536/https://s2-globo-play.glbimg.com/dYY0EGmtCrpCEw1hnwUojnPdi-s=/https://s2.glbimg.com/z_Uzspys4z-VXk0nnP7yfU8xuxE=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2025/V/w/WJw4PJSbWyEYEyZPNKnQ/2025-4958-swing-em-busca-do-prazer-poster.jpg"
                        alt="Swing"></div>
                <div class="movie drama"><img
                        src="https://s2-globo-play.glbimg.com/XFn9fbhyAfuFOuCP_w98SvjO6U0=/362x536/https://s2-globo-play.glbimg.com/00TWOFhalr0jaQ0p5GGlXXN1pUE=/https://s2.glbimg.com/e4ni-Kdx-jmpBlGBI2VJXRIBCDM=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2025/I/d/BlZAlYQ9AqMTCD1dtyUQ/10510237-poster.jpg"
                        alt="Armadilhas do passado"></div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERsj-b7c_dnJZ_67gcdVS0YZIg0b71kFDng&s"
                        alt="Depois de ser cinza"></div>
                <div class="movie terror"><img
                        src="https://www.atoupeira.com.br/wp-content/uploads/2023/03/a-primeira-comunhao-poster-nacional.jpg"
                        alt="Primeira comunhão"></div>
                <div class="movie ficção"><img src="http://www.impawards.com/2025/posters/mickey_oneseven.jpg"
                        alt="Pôster de Mickey 17 (2025)"></div>
                <div class="movie ação"><img
                        src="https://br.web.img2.acsta.net/pictures/210/022/21002259_20130429232135636.jpg"
                        alt="Oblivion"></div>
                <div class="movie terror"><img
                        src="http://www.impawards.com/2025/posters/twenty_eight_years_later_xxlg.jpg"
                        alt=" 28 Anos Depois "></div>
                <div class="movie ação"><img
                        src="https://media-cache.cinematerial.com/p/500x/ptdwzafa/back-in-action-movie-poster.jpg?v=1731600265"
                        alt="Back in Action"></div>
                <div class="movie ação"><img src="https://i.ebayimg.com/images/g/sb8AAOSwYRRnOPED/s-l400.jpg"
                        alt="Thunderbolts"></div>
                <div class="movie ação"><img src="http://www.impawards.com/2025/posters/back_in_action_ver2.jpg"
                        alt="Back in Action 2"></div>
                <div class="movie ação"><img src="http://www.impawards.com/2025/posters/med_accountant_two_ver3.jpg"
                        alt="The Accountant 2"></div>
                <div class="movie ação"><img
                        src="https://www.moviepostersgallery.com/wp-content/uploads/2025/04/Sinners1.jpg" alt="Sinners">
                </div>
                <div class="movie ficção"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt7QUdlEnFye2dtDdv6B1gYf6xle4aZfY3EQ&s"
                        alt="Skyline"></div>
                <div class="movie ficção"><img
                        src="https://i.etsystatic.com/36541132/r/il/72181f/7047437338/il_570xN.7047437338_fncs.jpg"
                        alt="Interstellar"></div>
                <div class="movie ficção"><img
                        src="https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/9834/filme_9834.jpg"
                        alt="Thor Amor e Trovão"></div>
                <div class="movie ficção"><img
                        src="https://m.media-amazon.com/images/M/MV5BZDU5YWE3MmItMGI0Ny00MWQ4LWE3NDktMjRkNDk5YmFjYTk2XkEyXkFqcGc@._V1_.jpg"
                        alt="The Electric State"></div>
                <div class="movie ficção"><img
                        src="https://static0.srcdn.com/wordpress/wp-content/uploads/2025/04/predator-badlands-official-poster.jpeg"
                        alt="Predator: Badlands"></div>
                <div class="movie terror"><img
                        src="https://m.media-amazon.com/images/I/71ok6+tYfrL._UF894,1000_QL80_.jpg" alt="Wolf Man">
                </div>
                <div class="movie terror"><img src="https://i.ebayimg.com/images/g/vGAAAeSwTVRomQxj/s-l400.jpg"
                        alt="Weapons">
                </div>
                <div class="movie terror"><img
                        src="https://uauposters.com.br/media/catalog/product/3/4/343320211103-uau-posters-maligno-terror-filmes.jpg"
                        alt="maligno "></div>
                <div class="movie terror"><img
                        src="https://uauposters.com.br/media/catalog/product/2/5/259720220222-uau-posters-benedetta-terror-filmes-2.jpg"
                        alt="Benedeta"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuziRM7i3RmfDaFStvlAWG8mxRRKEH95KQyw&s"
                        alt="Mulher no jardim"></div>
                <div class="movie drama"><img
                        src="https://cdn.posteritati.com/posters/000/000/074/570/hard-truths-md-web.jpg"
                        alt="Hard Truths"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/736x/90/cb/97/90cb9776d074b0aa5ba5840401466623.jpg" alt="Elizabette">
                </div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkGTnSjfb2DwBS9srZJxUfb-N_RQEIS3JuMg&s"
                        alt="Minha culpa"></div>
                <div class="movie drama"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsWP5owUB4DC13VRapLOUCohQrtNNwfnUCGofDNUXxXU7NcRcPU3m8oZgw-G40GdbuUo6xwni225kLal2XjofwoIMF2SwtX-gyaRYsOsJW2pyjhzLO5DQEl8UDUMKRBJLfJ5v1JGDygOA9/s800/vlt01a.jpg"
                        alt="Verlust"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/236x/b2/44/fb/b244fb77ae0a00ca6e48619cf70e9a59.jpg" alt="Mecbeth">
                </div>
                <div class="movie drama"><img
                        src="https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/perrengue-fashion/07102025/342/capa-perrengue-fashion.jpg"
                        alt="perrengue fashion"></div>
                <div class="movie drama"><img
                        src="https://www.atoupeira.com.br/wp-content/uploads/2016/04/Julieta-p%C3%B4ster-nacional.jpg"
                        alt="Julieta"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/474x/13/0a/d3/130ad31d6b3ab7ff990ac188639c81fd.jpg" alt="ó pai ó">
                </div>
                <div class="movie drama"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/por-outros-olhos/68ebe394-b9d6-4154-acd0-c3f9a6b45fee.webp"
                        alt="Por outros olhos "></div>
                <div class="movie comédia"><img
                        src="https://i.pinimg.com/736x/22/ee/ff/22eeffd3cae2bd700761f951f3c5ffc9.jpg" alt="The Pickup">
                </div>
                <div class="movie comédia"><img
                        src="https://c8.alamy.com/comp/2SR91A9/cheech-chongs-last-movie-2025-directed-by-david-bushell-and-starring-cheech-marin-tommy-chong-and-lou-adler-this-feature-length-documentary-chronicles-the-legendary-stoner-comedy-duos-five-decade-career-through-archival-footage-animated-sequences-and-interviews-us-one-sheet-poster-editorial-use-only-credit-bfa-keep-smokin-2SR91A9.jpg"
                        alt="Cheech & Chong's Last Movie"></div>
                <div class="movie comédia"><img
                        src="https://media-cache.cinematerial.com/p/500x/kizmupvy/running-point-movie-poster.jpg?v=1737479480"
                        alt="Running Point"></div>
                <div class="movie comédia"><img
                        src="https://br.web.img2.acsta.net/medias/nmedia/18/95/45/36/20405014.jpg"
                        alt="Vai que da certo "></div>
                <div class="movie comédia"><img
                        src="https://i0.wp.com/cromossomonerd.com.br/wp-content/uploads/2019/11/Bob-Esponja.jpg?resize=696%2C1032&ssl=1"
                        alt="Bob esponja"></div>
                <div class="movie comédia"><img
                        src="https://cinepop.com.br/wp-content/uploads/2019/02/60D747E2-5685-455D-931D-5C3A46C772A5.jpeg"
                        alt="De pernas pro ar "></div>
                <div class="movie comédia"><img
                        src="https://i.pinimg.com/736x/2c/87/86/2c878601f712418f5d0b50bfa9006448.jpg"
                        alt="Qualquer gato vira-lata"></div>
                <div class="movie comédia"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/amores-a-parte/4e496489-380f-47e7-89b5-d5d2446c3ac2.webp"
                        alt="Amores a parte "></div>
                <div class="movie comédia"><img
                        src="https://cineset.com.br/wp-content/uploads/2023/05/meu-pai-e-um-perigo-poster-nacional.jpg"
                        alt="Meu pai é um perigo"></div>
                <div class="movie animação"><img
                        src="https://uploads.jovemnerd.com.br/wp-content/uploads/2022/12/black_clover_filme_netflix_poster__h29c12-760x1126.jpg"
                        alt="Black cover"></div>
                <div class="movie animação"><img
                        src="https://www.picclickimg.com/jJ8AAOSwGfVecj1W/Poster-Dragon-Ball-Super-Avec-La-Team-Goku.webp"
                        alt="Dragao ball super "></div>
                <div class="movie animação"><img src="https://cinepop.com.br/wp-content/uploads/2021/02/luca_1.jpg"
                        alt="Lucca">
                </div>
                <div class="movie animação"><img
                        src="https://i0.wp.com/www.otakupt.com/wp-content/uploads/2024/01/My-Hero-Academia-The-Movie-%E2%80%93-You-Are-Next-movie-visual.jpg?resize=696%2C984&ssl=1"
                        alt="My hero academia "></div>
                <div class="movie animação"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFz82Knj2xj_O9p8INHzo2tslL1o7oYiDskQ&s"
                        alt="desenhos"></div>
                <div class="movie animação"><img
                        src="https://cinema10.com.br/upload/featuredImage.php?url=https%3A%2F%2Fcinema10.com.br%2Fupload%2Ffilmes%2Ffilmes_11207_4954456.jpg-r_1920_1080-f_jpg-q_x-xxyxx.jpg"
                        alt="Minions 2 "></div>
                <div class="movie animação"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKDiQzZMTz5SiYvDuaO_uCvse_06mubL-AYuE3MUxpnB-sm1sx18RAPewcuwGetGhA0o1W5rUVQHioWtZ2rh0c9XY2bqF2-MoiJQ1E2_zUoI_TcAZDUjBruQr_WLZuU0pTVirStZ1cv1_z/s1600/pp05.jpg"
                        alt="Pica-pau"></div>
                <div class="movie animação"><img
                        src="https://img.elo7.com.br/product/zoom/497C738/poster-super-mario-bross-filme-g-cartaz-adesivo-42-5x60cm-princesinha.jpg"
                        alt="Super mario boss"></div>
                <div class="movie ficção"><img src="https://pbs.twimg.com/media/G2RkbwaWkAAmOhS.jpg:large"
                        alt="trom ares">
                </div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/236x/85/9b/bd/859bbd1100710a7f35c8582af5cc0804.jpg"
                        alt="osiris child"></div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/236x/4b/d8/53/4bd85302ec6bc9b24caede629a7a99a4.jpg" alt="beyound">
                </div>
                <div class="movie ficção"><img
                        src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/5NSV6AYHAFOJPK4J53KAHBMQO4.jpg?auth=db5247214705c04f3a47841156978a38632f3dab193f367ef0140c3b1bbd4a86&width=1500&height=2122"
                        alt="Duna"></div>
                <div class="movie ficção"><img
                        src="https://i0.wp.com/alangeek.com.br/wp-content/uploads/2025/09/img_3604.jpg?fit=1080%2C1350&ssl=1"
                        alt="Avatar fogo e cinzas "></div>
                <div class="movie ficção"><img
                        src="https://cinepop.com.br/wp-content/uploads/2020/01/jornadaexclusivo.jpg" alt="A jornada">
                </div>
            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <section class="outras-categorias">
        <br>
        <h2>Outros Filmes</h2>
        <div class="movies-row-wrapper">
            <button class="scroll-btn scroll-left" onclick="scrollRow(this, 'left')">❮</button>
            <div class="movies-row">
                <div class="movie terror"><img
                        src="https://macabra.tv/wp-content/uploads/2024/12/Screamboat-2025-poster-MacabraTV-800x1201.jpg"
                        alt="ScreamBoat"></div>
                <div class="movie ação"><img
                        src="https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-01744-7ee7fa554b354294de17181315528687-480-0.jpg"
                        alt="Vingadores"></div>
                <div class="movie animação"><img
                        src="https://br.web.img2.acsta.net/c_310_420/pictures/23/04/06/19/24/2438297.jpg" alt="Suzume">
                </div>
                <div class="movie terror"><img
                        src="https://jpimg.com.br/uploads/2024/05/o_exorcismo_poster-1-341x500.jpg" alt="Exorcismo">
                </div>
                <div class="movie terror"><img
                        src="https://www.otempo.com.br/content/dam/otempo/editorias/entretenimento/filmes-e-series/2024/8/entretenimento-poster-de-filme-de-terror-mostra-bambi-assassino-1722965618.webp"
                        alt="Banbi"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSO2UoqGLz9QVwszrZoMM3-u4EGmcxZ19CUA&s"
                        alt="Nosferatu"></div>
                <div class="movie comédia"><img
                        src="https://i0.wp.com/sitedosgeeks.com/wp-content/uploads/2019/08/Captura-de-Tela-2019-08-14-%C3%A0s-18.11.44.png?resize=497%2C728"
                        alt="Os parças 2 "></div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERsj-b7c_dnJZ_67gcdVS0YZIg0b71kFDng&s"
                        alt="Depois de ser cinza"></div>
                <div class="movie terror"><img
                        src="https://www.atoupeira.com.br/wp-content/uploads/2023/03/a-primeira-comunhao-poster-nacional.jpg"
                        alt="Primeira comunhão"></div>
                <div class="movie ficção"><img src="http://www.impawards.com/2025/posters/mickey_oneseven.jpg"
                        alt="Pôster de Mickey 17 (2025)"></div>
                <div class="movie ação"><img
                        src="https://br.web.img2.acsta.net/pictures/210/022/21002259_20130429232135636.jpg"
                        alt="Oblivion"></div>
                <div class="movie terror"><img
                        src="http://www.impawards.com/2025/posters/twenty_eight_years_later_xxlg.jpg"
                        alt=" 28 Anos Depois "></div>
                <div class="movie ação"><img
                        src="https://media-cache.cinematerial.com/p/500x/ptdwzafa/back-in-action-movie-poster.jpg?v=1731600265"
                        alt="Back in Action"></div>
                <div class="movie ação"><img src="https://i.ebayimg.com/images/g/sb8AAOSwYRRnOPED/s-l400.jpg"
                        alt="Thunderbolts"></div>
                <div class="movie ação"><img src="http://www.impawards.com/2025/posters/back_in_action_ver2.jpg"
                        alt="Back in Action 2"></div>
                <div class="movie ação"><img src="http://www.impawards.com/2025/posters/med_accountant_two_ver3.jpg"
                        alt="The Accountant 2"></div>
                <div class="movie ação"><img
                        src="https://www.moviepostersgallery.com/wp-content/uploads/2025/04/Sinners1.jpg" alt="Sinners">
                </div>
                <div class="movie ficção"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt7QUdlEnFye2dtDdv6B1gYf6xle4aZfY3EQ&s"
                        alt="Skyline"></div>
                <div class="movie ficção"><img
                        src="https://i.etsystatic.com/36541132/r/il/72181f/7047437338/il_570xN.7047437338_fncs.jpg"
                        alt="Interstellar"></div>
                <div class="movie ficção"><img
                        src="https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/9834/filme_9834.jpg"
                        alt="The batman"></div>
                <div class="movie ficção"><img
                        src="https://m.media-amazon.com/images/M/MV5BZDU5YWE3MmItMGI0Ny00MWQ4LWE3NDktMjRkNDk5YmFjYTk2XkEyXkFqcGc@._V1_.jpg"
                        alt="The Electric State"></div>
                <div class="movie ficção"><img
                        src="https://static0.srcdn.com/wordpress/wp-content/uploads/2025/04/predator-badlands-official-poster.jpeg"
                        alt="Predator: Badlands"></div>
                <div class="movie terror"><img
                        src="https://m.media-amazon.com/images/I/71ok6+tYfrL._UF894,1000_QL80_.jpg" alt="Wolf Man">
                </div>
                <div class="movie terror"><img src="https://i.ebayimg.com/images/g/vGAAAeSwTVRomQxj/s-l400.jpg"
                        alt="Weapons">
                </div>
                <div class="movie terror"><img
                        src="https://uauposters.com.br/media/catalog/product/3/4/343320211103-uau-posters-maligno-terror-filmes.jpg"
                        alt="maligno "></div>
                <div class="movie terror"><img
                        src="https://uauposters.com.br/media/catalog/product/2/5/259720220222-uau-posters-benedetta-terror-filmes-2.jpg"
                        alt="Benedeta"></div>
                <div class="movie terror"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuziRM7i3RmfDaFStvlAWG8mxRRKEH95KQyw&s"
                        alt="Mulher no jardim"></div>
                <div class="movie drama"><img
                        src="https://cdn.posteritati.com/posters/000/000/074/570/hard-truths-md-web.jpg"
                        alt="Hard Truths"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/736x/90/cb/97/90cb9776d074b0aa5ba5840401466623.jpg" alt="Elizabette">
                </div>
                <div class="movie drama"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkGTnSjfb2DwBS9srZJxUfb-N_RQEIS3JuMg&s"
                        alt="Minha culpa"></div>
                <div class="movie drama"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsWP5owUB4DC13VRapLOUCohQrtNNwfnUCGofDNUXxXU7NcRcPU3m8oZgw-G40GdbuUo6xwni225kLal2XjofwoIMF2SwtX-gyaRYsOsJW2pyjhzLO5DQEl8UDUMKRBJLfJ5v1JGDygOA9/s800/vlt01a.jpg"
                        alt="Verlust"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/236x/b2/44/fb/b244fb77ae0a00ca6e48619cf70e9a59.jpg" alt="Mecbeth">
                </div>
                <div class="movie drama"><img
                        src="https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/perrengue-fashion/07102025/342/capa-perrengue-fashion.jpg"
                        alt="perrengue fashion"></div>
                <div class="movie drama"><img
                        src="https://www.atoupeira.com.br/wp-content/uploads/2016/04/Julieta-p%C3%B4ster-nacional.jpg"
                        alt="Julieta"></div>
                <div class="movie drama"><img
                        src="https://i.pinimg.com/474x/13/0a/d3/130ad31d6b3ab7ff990ac188639c81fd.jpg" alt="ó pai ó">
                </div>
                <div class="movie drama"><img
                        src="https://ingresso-a.akamaihd.net/prd/img/movie/por-outros-olhos/68ebe394-b9d6-4154-acd0-c3f9a6b45fee.webp"
                        alt="Por outros olhos "></div>
                <div class="movie comédia"><img
                        src="https://i.pinimg.com/736x/22/ee/ff/22eeffd3cae2bd700761f951f3c5ffc9.jpg" alt="The Pickup">
                </div>
                <div class="movie comédia"><img
                        src="https://c8.alamy.com/comp/2SR91A9/cheech-chongs-last-movie-2025-directed-by-david-bushell-and-starring-cheech-marin-tommy-chong-and-lou-adler-this-feature-length-documentary-chronicles-the-legendary-stoner-comedy-duos-five-decade-career-through-archival-footage-animated-sequences-and-interviews-us-one-sheet-poster-editorial-use-only-credit-bfa-keep-smokin-2SR91A9.jpg"
                        alt="Cheech & Chong's Last Movie"></div>
                <div class="movie comédia"><img
                        src="https://media-cache.cinematerial.com/p/500x/kizmupvy/running-point-movie-poster.jpg?v=1737479480"
                        alt="Running Point"></div>
                <div class="movie comédia"><img
                        src="https://br.web.img2.acsta.net/medias/nmedia/18/95/45/36/20405014.jpg"
                        alt="Vai que da certo "></div>
                <div class="movie comédia"><img
                        src="https://i0.wp.com/cromossomonerd.com.br/wp-content/uploads/2019/11/Bob-Esponja.jpg?resize=696%2C1032&ssl=1"
                        alt="Bob esponja"></div>
                <div class="movie comédia"><img
                        src="https://cineset.com.br/wp-content/uploads/2023/05/meu-pai-e-um-perigo-poster-nacional.jpg"
                        alt="Meu pai é um perigo"></div>
                <div class="movie animação"><img
                        src="https://uploads.jovemnerd.com.br/wp-content/uploads/2022/12/black_clover_filme_netflix_poster__h29c12-760x1126.jpg"
                        alt="Black cover"></div>
                <div class="movie animação"><img
                        src="https://www.picclickimg.com/jJ8AAOSwGfVecj1W/Poster-Dragon-Ball-Super-Avec-La-Team-Goku.webp"
                        alt="Dragao ball super "></div>
                <div class="movie animação"><img src="https://cinepop.com.br/wp-content/uploads/2021/02/luca_1.jpg"
                        alt="Lucca">
                </div>
                <div class="movie animação"><img
                        src="https://i0.wp.com/www.otakupt.com/wp-content/uploads/2024/01/My-Hero-Academia-The-Movie-%E2%80%93-You-Are-Next-movie-visual.jpg?resize=696%2C984&ssl=1"
                        alt="My hero academia "></div>
                <div class="movie animação"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFz82Knj2xj_O9p8INHzo2tslL1o7oYiDskQ&s"
                        alt="desenhos"></div>
                <div class="movie animação"><img
                        src="https://cinema10.com.br/upload/featuredImage.php?url=https%3A%2F%2Fcinema10.com.br%2Fupload%2Ffilmes%2Ffilmes_11207_4954456.jpg-r_1920_1080-f_jpg-q_x-xxyxx.jpg"
                        alt="Minions 2 "></div>
                <div class="movie animação"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKDiQzZMTz5SiYvDuaO_uCvse_06mubL-AYuE3MUxpnB-sm1sx18RAPewcuwGetGhA0o1W5rUVQHioWtZ2rh0c9XY2bqF2-MoiJQ1E2_zUoI_TcAZDUjBruQr_WLZuU0pTVirStZ1cv1_z/s1600/pp05.jpg"
                        alt="Pica-pau"></div>
                <div class="movie animação"><img
                        src="https://img.elo7.com.br/product/zoom/497C738/poster-super-mario-bross-filme-g-cartaz-adesivo-42-5x60cm-princesinha.jpg"
                        alt="Super mario boss"></div>
                <div class="movie ficção"><img src="https://pbs.twimg.com/media/G2RkbwaWkAAmOhS.jpg:large"
                        alt="trom ares">
                </div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/236x/85/9b/bd/859bbd1100710a7f35c8582af5cc0804.jpg"
                        alt="osiris child"></div>
                <div class="movie ficção"><img
                        src="https://i.pinimg.com/236x/4b/d8/53/4bd85302ec6bc9b24caede629a7a99a4.jpg" alt="beyound">
                </div>
                <div class="movie ficção"><img
                        src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/5NSV6AYHAFOJPK4J53KAHBMQO4.jpg?auth=db5247214705c04f3a47841156978a38632f3dab193f367ef0140c3b1bbd4a86&width=1500&height=2122"
                        alt="Duna"></div>
                <div class="movie ficção"><img
                        src="https://i0.wp.com/alangeek.com.br/wp-content/uploads/2025/09/img_3604.jpg?fit=1080%2C1350&ssl=1"
                        alt="Avatar fogo e cinzas "></div>
                <div class="movie ficção"><img
                        src="https://cinepop.com.br/wp-content/uploads/2020/01/jornadaexclusivo.jpg" alt="A jornada">
                </div>
            </div>
            <button class="scroll-btn scroll-right" onclick="scrollRow(this, 'right')">❯</button>
        </div>
    </section>

    <div id="movieModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="movieTitle"></h2>

            <!-- Poster container - shows by default, hidden when video plays -->
            <div id="posterContainer">
                <img id="moviePoster" src="/placeholder.svg" alt="Movie Poster">
            </div>

            <!-- Video container - hidden by default, shows when buttons clicked -->
            <div id="videoContainer" style="display: none;">
                <iframe id="videoPlayer" width="100%" height="315" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Movie info section with synopsis and duration -->
            <div id="movieInfo">
                <p id="movieSynopsis"></p>
                <p id="movieDuration"></p>
            </div>

            <button id="watchTrailer" class="modal-btn">Ver Trailer</button>
            <button id="watchMovie" class="modal-btn">Assistir</button>
        </div>
    </div>


    <footer class="footer">
        <p>© 2025 - CLIQ Streaming</p>
    </footer>
</body>
<script src="home.js"></script>

</html>