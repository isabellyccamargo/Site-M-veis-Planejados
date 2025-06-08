<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ambientes Planejados</title>
  <link rel="icon" href="fotos/logo/logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style-sobreNos.css">
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

    <!-- CARROSEL DE IMAGENS  -->
    <div id="carouselExampleAutoplaying" class="carousel-slide" data-bs-ride="carousel">
      <div class="carousel-inner h-620">

        <div class="carousel-item">
          <img src="fotos/carrossel-menu/01da86bb-8aee-4e88-bce5-7942f3b7f0b5.JPG" class="d-block w-100"
            alt="imagem do projeto">
        </div>
        <div class="carousel-item">
          <img src="fotos/carrossel-menu/2b9e7e37-9923-4bff-9684-b3c8f1818b43.JPG" class="d-block w-100"
            alt="iamgem do projeto">
        </div>
        <div class="carousel-item active ">
          <img src="fotos/carrossel-menu/855b3222-db65-4bbd-b865-c1834a81cefc.JPG" class="d-block w-100"
            alt="iamgem do projeto">
        </div>
        <div class="carousel-item ">
          <img src="fotos/carrossel-menu/95075929-0a23-4865-a143-1e8f8fec32a1.JPG" class="d-block w-100"
            alt="iamgem do projeto">
        </div>
      </div>
    </div>

    <!-- PARTE QUE FALA SOBRE O DONO E SOBRE A EMPRESA -->

    <section id="sobre-mim">
      <div class="container">
        <div class="imagem">
          <img src="fotos/sobre-nos/jefferson.jpg" alt="Foto sobre mim">
        </div>
        <div class="conteudo">
          <h2 class="sobre">Nossa Identidade</h2>
          <p>
            Meu nome é<strong> Jefferson Ribeiro</strong>, tenho 30 anos, dono da empresa<strong> JR Ambientes Planejados</strong>,
            com mais de 6 anos de experiência no mercado de móveis sob medida, sou uma pessoa movida por
            <strong>propósito e
              crescimento.</strong> Ao longo da minha trajetória, venho buscando constantemente evoluir tanto
            no campo
            pessoal quanto profissional, sempre com foco em integridade, aprendizado contínuo e conexões
            significativas.
            Acredito que cada experiência carrega um valor único e procuro transformar cada desafio em
            oportunidade de
            desenvolvimento. Tenho uma proprietária, que é minha esposa que se chama <strong> Ana
              Freitas.</strong>
          </p>

          <div class="tabs">
            <button class="tab ativo" data-tab="habilidades"><span>Principais</span><span>
                Habilidades</span></button>
            <button class="tab" data-tab="educacao"><span>Educação e</span><span> Certificação</span></button>
            <button class="tab" data-tab="experiencia">Experiência</button>

            <div class="underline-sobre"></div>

          </div>

          <div class="conteudo-tab" id="habilidades">
            <p><strong>Determinado</strong><br><span>persistência aos seus objetivos.</span></p>
            <p><strong>Responsável</strong><br><span>responsabilidades com comprometimento.</span></p>
          </div>

          <div class="conteudo-tab" id="educacao" style="display: none;">
            <p><strong>Ensino médio completo</strong><br></p>
            <p><strong>Curso de designer de interiores</strong><br></p>
          </div>

          <div class="conteudo-tab" id="experiencia" style="display: none;">
            <p><strong>Empresa RC planejados</strong> – Aproximadamente 5 anos<br></p>
          </div>

        </div>

      </div>

    </section>

    <div>
      <a href="formulario.php" class="btn btn-orcamento-sobre">Entre em Contato</a>
    </div>
  </main>

  <?php include 'componentes/footer.html'; ?>

  <!-- Ícones Font Awesome (necessário para os ícones) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <button id="btnTopo" title="Voltar ao topo">
    ↑
  </button>
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

  <!-- HAMBURGUER DO RESPONSIVO -->
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

  <!-- UNDERLINE DO SOBRE NÓS -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const tabs = document.querySelectorAll(".tab");
      const contents = document.querySelectorAll(".conteudo-tab");
      const underline = document.querySelector(".tabs .underline-sobre");

      function moveUnderline(tab) {
        underline.style.width = `${tab.offsetWidth}px`;
        underline.style.left = `${tab.offsetLeft}px`;
      }

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          // Alternar abas
          tabs.forEach(t => t.classList.remove("ativo"));
          contents.forEach(c => c.style.display = "none");

          tab.classList.add("ativo");
          const target = tab.getAttribute("data-tab");
          document.getElementById(target).style.display = "block";

          moveUnderline(tab);
        });
      });

      // Inicializa underline e conteúdo ao carregar
      const activeTab = document.querySelector(".tab.ativo");
      if (activeTab) {
        moveUnderline(activeTab);
        document.getElementById(activeTab.getAttribute("data-tab")).style.display = "block";
      }

      // Atualiza underline se redimensionar a janela (resolução muda)
      window.addEventListener("resize", () => {
        const activeTab = document.querySelector(".tab.ativo");
        if (activeTab) moveUnderline(activeTab);
      });
    });
  </script>