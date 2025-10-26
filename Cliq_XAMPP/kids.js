document.addEventListener("DOMContentLoaded", () => {
  let currentSlide = 0
  const slides = document.querySelectorAll(".carousel-item")
  const carousel = document.querySelector(".carousel")

  // Mapa de trailers - apenas 5 filmes infantis com trailers reais
  const trailerMap = {
    "Toy Story": "https://www.youtube.com/embed/wmiIUN-7qhE",
    "Procurando Nemo": "https://www.youtube.com/embed/SPHfeNgogVs",
    "Frozen II": "https://www.youtube.com/embed/Zi4LMpSDccc",
    Moana: "https://www.youtube.com/embed/LKFuXETZUsI",
    Encanto: "https://www.youtube.com/embed/CaimKeDcudo",
  }

  // Mapa de filmes (placeholders para demonstração)
  const movieMap = {
    "Toy Story": "https://www.youtube.com/embed/wmiIUN-7qhE",
    "Procurando Nemo": "https://www.youtube.com/embed/SPHfeNgogVs",
    "Frozen II": "https://www.youtube.com/embed/Zi4LMpSDccc",
    Moana: "https://www.youtube.com/embed/LKFuXETZUsI",
    Encanto: "https://www.youtube.com/embed/CaimKeDcudo",
  }

  const movieData = {
    "Toy Story": {
      poster: "https://image.tmdb.org/t/p/w500/uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg",
      synopsis:
        "Woody, um cowboy de brinquedo, é o brinquedo favorito de Andy. Mas quando Buzz Lightyear chega, Woody fica com ciúmes e os dois embarcam em uma grande aventura!",
      duration: "81 min",
    },
    "Procurando Nemo": {
      poster: "https://image.tmdb.org/t/p/w500/8ZbybiGYe8XM4WGmGlhF990L7Gf.jpg",
      synopsis:
        "Marlin, um peixe-palhaço superprotetor, embarca em uma jornada épica pelo oceano para encontrar seu filho Nemo, que foi capturado por mergulhadores.",
      duration: "100 min",
    },
    "Frozen II": {
      poster: "https://image.tmdb.org/t/p/w500/pjeMs3yqRmFL3giJy4PMXWZTTPa.jpg",
      synopsis:
        "Elsa, Anna, Kristoff e Olaf embarcam em uma jornada para descobrir a origem dos poderes de Elsa e salvar o reino de Arendelle.",
      duration: "103 min",
    },
    Moana: {
      poster: "https://image.tmdb.org/t/p/w500/4JeejGugONWpJkbnvL12hVoYEDa.jpg",
      synopsis:
        "Moana, uma jovem navegadora, parte em uma aventura pelo oceano para salvar seu povo, com a ajuda do semideus Maui.",
      duration: "107 min",
    },
    Encanto: {
      poster: "https://image.tmdb.org/t/p/w500/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg",
      synopsis:
        "Mirabel é a única da família Madrigal sem poderes mágicos, mas quando a magia está em perigo, ela pode ser a única esperança de salvar sua família.",
      duration: "102 min",
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

  // Auto-slide a cada 5 segundos
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
    const cleanTitle = altText.trim()
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

    // Mostrar pôster, esconder vídeo inicialmente
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
})
