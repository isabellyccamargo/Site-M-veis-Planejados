<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ambientes Planejados</title>
  <link rel="icon" href="fotos/logo/logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style-galeria.css">
  <link rel="stylesheet" href="css/style-header.css">
  <link rel="stylesheet" href="css/style-footer.css">

  <!-- FONTE QUE ESTA SENDO APLICADA -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <?php include 'componentes/header.html'; ?>

  <main>
    <div id="carouselExampleAutoplaying" class="carousel-slide" data-bs-ride="carousel">
      <div class="carousel-inner h-620">

        <div class="carousel-item">
          <img src="fotos/carrossel-menu/01da86bb-8aee-4e88-bce5-7942f3b7f0b5.JPG" class="d-block w-100"
            alt="imagem do projeto">
        </div>
        <div class="carousel-item">
          <img src="fotos/carrossel-menu/2b9e7e37-9923-4bff-9684-b3c8f1818b43.JPG" class="d-block w-100"
            alt="imagem do projeto">
        </div>
        <div class="carousel-item active ">
          <img src="fotos/carrossel-menu/855b3222-db65-4bbd-b865-c1834a81cefc.JPG" class="d-block w-100"
            alt="imagem do projeto">
        </div>
        <div class="carousel-item ">
          <img src="fotos/carrossel-menu/95075929-0a23-4865-a143-1e8f8fec32a1.JPG" class="d-block w-100"
            alt="imagem do projeto">
        </div>
      </div>
    </div>

    <h1 class="servicos">Conheça nossos Serviços!</h1>
    <?php
    $categoriasDir = 'fotos/categorias';
    $cardsHtml = '<div></div>';

    if (is_dir($categoriasDir)) {
      $pastas = scandir($categoriasDir);

      foreach ($pastas as $pasta) {
        if ($pasta === '.' || $pasta === '..') continue;

        $caminhoCapa = "$categoriasDir/$pasta/capa/capa.jpg";

        if (is_dir("$categoriasDir/$pasta") && file_exists($caminhoCapa)) {

          $nomeFormatado = ucwords(str_replace('-', ' ', $pasta));

          $cardsHtml .= '
                      <div class="category-card" style="min-width: 140px;">
                        <a href="galeria.php?categoria=' . urlencode($pasta) . '" class="text-decoration-none ">
                          <img src="' . $caminhoCapa . '" class="category-img"
                            alt="' . htmlspecialchars($nomeFormatado) . '" style="width: 100%; height: 90px; object-fit: cover;">
                          <p class="nome small mt-2">' . htmlspecialchars($nomeFormatado) . '</p>
                        </a>
                      </div>';
        }
      }
    }
    ?>

    <div class=" container my-4">

      <section id="categoria-menu" class="my-4">
        <div class="container text-center">
          <div class="carousel-wrapper"
            style="position: relative; display: flex; align-items: center; justify-content: center;">

            <button class="btn rounded-circle shadow" type="button" id="btn-prev">
              <i class="bi bi-chevron-left fs-4"></i>
            </button>

            <div class="custom-carousel" id="categoryCarouselMini"
              style="display: flex; overflow-x: scroll; scroll-behavior: smooth; gap: 15px; padding: 10px 0; scrollbar-width: none; -ms-overflow-style: none;">

              <?= $cardsHtml ?>

            </div>

            <button class="btn  rounded-circle shadow" type="button" id="btn-next">
              <i class="bi bi-chevron-right fs-4"></i>
            </button>

          </div>
        </div>
      </section>

      <?php
      // Recebe o nome da categoria da URL
      $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
      $galeriaHtml = '';

      if ($categoria) {
        $pastaCategoria = "fotos/categorias/" . basename($categoria);
        if (is_dir($pastaCategoria)) {
          $arquivos = scandir($pastaCategoria);

          foreach ($arquivos as $arquivo) {
            if (in_array($arquivo, ['.', '..', 'capa.jpg'])) continue; // ignora capa e diretórios

            $caminhoImagem = "$pastaCategoria/$arquivo";
            $extensao = pathinfo($caminhoImagem, PATHINFO_EXTENSION);

            // Verifica se é uma imagem
            if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
              $galeriaHtml .= '
                          <div class="col-6 col-md-3 foto-item" data-categoria="' . htmlspecialchars($categoria) . '">
                            <img src="' . $caminhoImagem . '" alt="" class="gallery-img" />
                          </div>';
            }
          }
        } else {
          $galeriaHtml = '<p>Categoria não encontrada.</p>';
        }
      } else {
        $galeriaHtml = '<p>Nenhuma categoria selecionada.</p>';
      }
      ?>

      <!-- Galeria -->
      <div class="row g-4" id="galeria">

        <div class="row g-3">
          <?= $galeriaHtml ?>
        </div>

      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/script.js"></script> -->

    <a href="formulario.php" class="btn btn-galeria">Faça seu orçamento</a>

    <div id="modal" class="modal">
      <span class="close">&times;</span>
      <span class="nav prev">&#10094;</span> <!-- seta esquerda -->
      <img class="modal-content" id="modal-img">
      <span class="nav next">&#10095;</span> <!-- seta direita -->
      <div id="caption"></div>
    </div>

    <!-- Ícones Font Awesome (necessário para os ícones) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <button id="btnTopo" title="Voltar ao topo">
      ↑
    </button>

  </main>

  <?php include 'componentes/footer.html'; ?>


  <!-- BOTÃO ESQUERDA E DIREITA DA CATEGORIA -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const carousel = document.getElementById("categoryCarouselMini");

      // Verifica largura do card
      function getCardWidth() {
        const card = carousel.querySelector(".category-card");
        return card ? card.offsetWidth + 15 : 155; // margem de segurança
      }

      // Botões
      document.getElementById("btn-prev").addEventListener("click", () => {
        carousel.scrollBy({
          left: -getCardWidth(),
          behavior: "smooth"
        });
      });

      document.getElementById("btn-next").addEventListener("click", () => {
        carousel.scrollBy({
          left: getCardWidth(),
          behavior: "smooth"
        });
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navLinks = document.querySelectorAll(".navbar-nav a.icon-text");
      const btnOrcamento = document.querySelector(".btn-orcamento");
      const navbarCollapse = document.querySelector(".navbar-collapse");

      navLinks.forEach(function(link) {
        link.addEventListener("click", function() {
          if (navbarCollapse.classList.contains("show")) {
            new bootstrap.Collapse(navbarCollapse).hide();
          }
        });
      });

      if (btnOrcamento) {
        btnOrcamento.addEventListener("click", function() {
          if (navbarCollapse.classList.contains("show")) {
            new bootstrap.Collapse(navbarCollapse).hide();
          }
        });
      }
    });
  </script>

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const categoriaAtual = urlParams.get('categoria');

    if (categoriaAtual) {
      document.querySelectorAll('.category-card').forEach(card => {
        const link = card.querySelector('a');
        if (link.href.includes(categoriaAtual)) {
          card.classList.add('ativo');
        }
      });
    }
  </script>

  <!-- BOTÃO QUE APARECE PARA SUBIR AO TOPO NOVAMENTE -->
  <script>
    const btn = document.getElementById("btnTopo");

    // Mostrar o botão quando descer 100px da parte de cima
    window.onscroll = function() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    };

    // Quando clicar, volta pro topo suavemente
    btn.onclick = function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    };
  </script>

  <!-- PARA MOSTRAR SÓ AS IMAGENS DAQUELA CATEGORIA -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const urlParams = new URLSearchParams(window.location.search);
      const categoria = urlParams.get('categoria');

      if (categoria) {
        // Mostrar apenas imagens da categoria atual
        document.querySelectorAll('.foto-item').forEach(item => {
          if (item.dataset.categoria === categoria) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });

        // Marcar categoria ativa (se estiver usando .category-card)
        document.querySelectorAll('.category-card').forEach(card => {
          const link = card.querySelector('a');
          if (link && link.href.includes(categoria)) {
            card.classList.add('ativo');
          } else {
            card.classList.remove('ativo');
          }
        });
      }
    });
  </script>

  <!-- MODAL -->
  <script>
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const captionText = document.getElementById("caption");
    const closeBtn = document.querySelector(".close");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let images = []; // Só imagens visíveis da categoria ativa
    let currentIndex = 0;

    // Atualiza a lista de imagens visíveis (filtra por categoria atual)
    function updateVisibleImages() {
      images = Array.from(document.querySelectorAll('.foto-item'))
        .filter(item => item.style.display !== 'none') // Apenas os visíveis
        .map(item => item.querySelector('.gallery-img'));
    }

    // Adiciona evento a todas as imagens
    document.querySelectorAll('.gallery-img').forEach(img => {
      img.addEventListener("click", () => {
        updateVisibleImages(); // Atualiza a lista com base na categoria atual
        currentIndex = images.indexOf(img); // Define a imagem atual
        openModal();
      });
    });

    function openModal() {
      const img = images[currentIndex];
      modalImg.src = img.src;
      captionText.textContent = img.alt;
      modal.classList.add("active");
    }

    // Botão "anterior"
    prevBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      openModal();
    });

    // Botão "próximo"
    nextBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      currentIndex = (currentIndex + 1) % images.length;
      openModal();
    });

    // Botão fechar
    closeBtn.addEventListener("click", () => {
      modal.classList.remove("active");
    });

    // Clique fora da imagem fecha o modal
    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.classList.remove("active");
      }
    });

    // Teclado: esquerda, direita, ESC
    document.addEventListener("keydown", (e) => {
      if (modal.style.display === "active") {
        if (e.key === "ArrowRight") nextBtn.click();
        else if (e.key === "ArrowLeft") prevBtn.click();
        else if (e.key === "Escape") modal.classList.remove("active");
      }
    });
  </script>
  </script>

</body>

</html>