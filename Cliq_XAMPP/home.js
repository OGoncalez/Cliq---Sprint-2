document.addEventListener("DOMContentLoaded", () => {
  let currentSlide = 0
  const slides = document.querySelectorAll(".carousel-item")
  const carousel = document.querySelector(".carousel")

  // Mapa de trailers
  const trailerMap = {
    Vingadores: "https://www.youtube.com/embed/TcMBFSGVi1c",
    "Homem aranha": "https://www.youtube.com/embed/JfVOs4VSpmA",
    Anabelle: "https://www.youtube.com/embed/KisPhy7T__Q",
    Batman: "https://www.youtube.com/embed/mqqft2x_Aa4",
    Encanto: "https://www.youtube.com/embed/CaimKeDcudo",
    Interstellar: "https://www.youtube.com/embed/zSWdZVtXT7E",
    Alien: "https://www.youtube.com/embed/LjLamj-b0I8",
    Superman: "https://www.youtube.com/embed/zJmjw_3fN8c",
    // Adicione mais filmes aqui
  }

  // Mapa de filmes (exemplo com vídeos completos ou placeholders)
  const movieMap = {
    Vingadores: "https://www.youtube.com/embed/6ZfuNTqbHE8", // Exemplo: Filme completo ou placeholder (Avengers)
    "Homem aranha": "https://www.youtube.com/embed/rt-2cxAiPJk", // Spider-Man
    Anabelle: "https://www.youtube.com/embed/pKiz7gCJ3I8", // Annabelle
    Batman: "https://www.youtube.com/embed/NLOp_6uPccQ", // The Batman
    Encanto: "https://www.youtube.com/embed/0jT3OAL4h-Q", // Encanto
    Interstellar: "https://www.youtube.com/embed/LyQohvIiXoc", // Interstellar
    Alien: "https://www.youtube.com/embed/jQ5EUjkLZLo", // Alien
    Superman: "https://www.youtube.com/embed/jO1drt7ue38", // Superman
    // Adicione mais filmes aqui, usando embeds ou links reais
  }

  const movieData = {
    Vingadores: {
      poster: "https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg",
      synopsis:
        "Os heróis mais poderosos da Terra se unem para combater ameaças que nenhum herói poderia enfrentar sozinho.",
      duration: "143 min",
    },
    "Homem aranha": {
      poster:
        "https://img.elo7.com.br/product/zoom/2677A6D/big-poster-filme-homem-aranha-de-volta-ao-lar-lo10-90x60-cm-marvel.jpg",
      synopsis:
        "Peter Parker equilibra sua vida como estudante do ensino médio e suas responsabilidades como Homem-Aranha.",
      duration: "133 min",
    },
    Anabelle: {
      poster:
        "https://uauposters.com.br/media/catalog/product/cache/1/small_image/333x500/9df78eab33525d08d6e5fb8d27136e95/7/7/770020150308-uau-posters-filmes-terror-annabelle.jpg",
      synopsis: "Uma boneca possuída por um espírito maligno aterroriza uma família.",
      duration: "99 min",
    },
    Batman: {
      poster:
        "https://img.elo7.com.br/product/zoom/46CCBC1/poster-filme-batman-o-cavaleiro-das-trevas-a2-60x42-cm-lo02-decoracao-quarto-nerd.jpg",
      synopsis: "Batman enfrenta o Coringa em uma batalha épica pelo destino de Gotham City.",
      duration: "152 min",
    },
    Encanto: {
      poster: "https://i.pinimg.com/736x/ca/3d/d2/ca3dd24c5181b47371e587c9d68e3334.jpg",
      synopsis: "Uma jovem colombiana luta para encontrar seu lugar em uma família mágica.",
      duration: "102 min",
    },
    Interstellar: {
      poster: "https://i.etsystatic.com/36541132/r/il/72181f/7047437338/il_570xN.7047437338_fncs.jpg",
      synopsis:
        "Uma equipe de exploradores viaja através de um buraco de minhoca no espaço em busca de um novo lar para a humanidade.",
      duration: "169 min",
    },
    Alien: {
      poster:
        "https://acdn-us.mitiendanube.com/stores/004/687/740/products/pos-03736-0c9fa69c6909c1026017211500446414-480-0.jpg",
      synopsis: "A tripulação de uma nave espacial encontra uma forma de vida alienígena mortal.",
      duration: "117 min",
    },
    Superman: {
      poster: "https://ingresso-a.akamaihd.net/b2b/production/uploads/articles-content/8923869c-f8a6-4258-ba74-4170bf7fb202.jpg",
      synopsis: "O último filho de Krypton usa seus poderes sobre-humanos para proteger a Terra.",
      duration: "131 min",
    },
  }

  if (!carousel || slides.length === 0) {
    console.error("Carrossel não encontrado ou sem slides.")
    return
  }

  // Configurar carrossel
  slides.forEach((slide, index) => {
    slide.style.position = "absolute"
    slide.style.top = "0"
    slide.style.left = "0"
    slide.style.width = "100%"
    slide.style.transition = "opacity 0.5s ease-in-out, transform 0.5s ease-in-out"
    slide.style.opacity = "0"
    slide.style.transform = "translateX(0)"
  })

  function animateCarousel(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.style.opacity = "1"
        slide.style.transform = "translateX(0)"
      } else if (i < index) {
        slide.style.opacity = "0.3"
        slide.style.transform = "translateX(-100%)"
      } else {
        slide.style.opacity = "0.3"
        slide.style.transform = "translateX(100%)"
      }
    })
    currentSlide = index
  }

  // Auto-slide every 5 seconds
  setInterval(() => {
    const nextSlide = (currentSlide + 1) % slides.length
    animateCarousel(nextSlide)
  }, 5000)

  animateCarousel(currentSlide)

  // FUNÇÃO PARA FILTRAR FILMES POR CATEGORIA
  window.filterMovies = (type) => {
    const movies = document.querySelectorAll(".movie")

    movies.forEach((movie) => {
      movie.classList.remove("hidden")

      if (type !== "destaque" && !movie.classList.contains(type)) {
        movie.classList.add("hidden")
      }
    })

    const firstRow = document.querySelector(".movies-row")
    if (firstRow) {
      firstRow.scrollLeft = 0
    }
  }

  // FUNÇÃO PARA ROLAR A LINHA DE FILMES
  window.scrollRow = (button, direction) => {
    const row = button.parentElement.querySelector(".movies-row")

    if (!row) return

    const scrollAmount = 300

    row.scrollBy({
      left: direction === "left" ? -scrollAmount : scrollAmount,
      behavior: "smooth",
    })
  }

  // Barra de pesquisa
  const searchInput = document.getElementById("searchInput")
  searchInput.addEventListener("input", () => {
    const query = searchInput.value.toLowerCase()
    const movies = document.querySelectorAll(".movie")

    movies.forEach((movie) => {
      const title = movie.querySelector("img").alt.toLowerCase()
      if (query === "" || title.includes(query)) {
        movie.classList.remove("hidden")
      } else {
        movie.classList.add("hidden")
      }
    })
  })

  function recommendMovies() {
    // Função mantida, mas sem grandes operações de DOM
  }

  // Função para exibir o modal ao clicar no filme
  function showMovieOptions(movie) {
    const modal = document.getElementById("movieModal")
    const movieTitle = document.getElementById("movieTitle")
    const moviePoster = document.getElementById("moviePoster")
    const movieSynopsis = document.getElementById("movieSynopsis")
    const movieDuration = document.getElementById("movieDuration")
    const posterContainer = document.getElementById("posterContainer")
    const watchTrailer = document.getElementById("watchTrailer")
    const watchMovie = document.getElementById("watchMovie")
    const videoContainer = document.getElementById("videoContainer")
    const videoPlayer = document.getElementById("videoPlayer")
    const altText = movie.querySelector("img").alt

    // Limpar título
    const cleanTitle = altText.replace("Pôster de ", "").replace("Pôster de Lançamento ", "").trim()
    movieTitle.textContent = cleanTitle

    const data = movieData[cleanTitle]
    if (data) {
      moviePoster.src = data.poster
      movieSynopsis.textContent = data.synopsis
      movieDuration.textContent = `Duração: ${data.duration}`
    } else {
      moviePoster.src = movie.querySelector("img").src
      movieSynopsis.textContent = "Sinopse não disponível."
      movieDuration.textContent = "Duração: N/A"
    }

    // Show poster, hide video initially
    posterContainer.style.display = "block"
    videoContainer.style.display = "none"
    videoPlayer.src = ""

    // Configurar botão de trailer
    watchTrailer.onclick = () => {
      const trailerUrl = trailerMap[cleanTitle]
      if (trailerUrl) {
        videoPlayer.src = trailerUrl
        posterContainer.style.display = "none"
        videoContainer.style.display = "block"
      } else {
        alert(`Trailer não disponível para "${cleanTitle}".`)
      }
    }

    // Configurar botão de assistir
    watchMovie.onclick = () => {
      const movieUrl = movieMap[cleanTitle]
      if (movieUrl) {
        videoPlayer.src = movieUrl
        posterContainer.style.display = "none"
        videoContainer.style.display = "block"
      } else {
        alert(`Filme não disponível para "${cleanTitle}".`)
      }
    }

    modal.style.display = "block"
  }

  // Adicionar evento de clique a todos os filmes
  document.querySelectorAll(".movie").forEach((movie) => {
    if (!movie.closest(".scroll-btn")) {
      movie.addEventListener("click", () => showMovieOptions(movie))
    }
  })

  // Fechar o modal
  document.querySelector(".close").addEventListener("click", () => {
    const modal = document.getElementById("movieModal")
    const videoPlayer = document.getElementById("videoPlayer")
    const posterContainer = document.getElementById("posterContainer")
    modal.style.display = "none"
    videoPlayer.src = ""
    posterContainer.style.display = "block"
  })

  // Fechar o modal ao clicar fora
  window.addEventListener("click", (event) => {
    const modal = document.getElementById("movieModal")
    const videoPlayer = document.getElementById("videoPlayer")
    const posterContainer = document.getElementById("posterContainer")
    if (event.target === modal) {
      modal.style.display = "none"
      videoPlayer.src = ""
      posterContainer.style.display = "block"
    }
  })

  window.onload = recommendMovies
})
