 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Ambientes Planejados</title>
   <link rel="icon" href="fotos/logo/logo.png">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style-index.css">
   <link rel="stylesheet" href="css/style-header.css">
   <link rel="stylesheet" href="css/style-footer.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

 </head>

 <body>

   <?php include 'componentes/header.html'; ?>

   <!-- CARROSEL DE IMAGENS  -->
   <main>
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

            $cardsHtml .=
              '<div class="category-card" style="min-width: 200px;">
                <a href="galeria.php?categoria=' . urlencode($pasta) . '" class="text-decoration-none text-dark">

                  <img src="' . $caminhoCapa . '" class="card-img-top category-img" alt="' . htmlspecialchars($nomeFormatado) . '" style="width: 100%;">

                  <div class="card-body p-2 text-center">
                    <p class="mb-0 Categoria-p">' . htmlspecialchars($nomeFormatado) . '</p>
                  </div>

                </a>
              </div>';
          }
        }
      }
    ?>

     <!-- CATEGORIAS -->
     <section id="categoria">

       <div class="container text-center my-5 ">

         <h2 class="mb-4  categorias">Conheça ambientes já transformados!</h2>

         <p class="slogan">"Transformando seu sonho em realidade!"</p>

         <div class="carousel-wrapper"
           style="position: relative; display: flex; align-items: center; justify-content: center;">

           <button class="btn rounded-circle shadow" type="button" id="btn-prev">
             <i class="bi bi-chevron-left fs-4"></i>
           </button>

           <div class="custom-carousel" id="categoryCarousel"
             style="display: flex; overflow-x: scroll; scroll-behavior: smooth; gap: 20px; scrollbar-width: none; -ms-overflow-style: none;">

             <?= $cardsHtml ?>

           </div>

           <button class="btn  rounded-circle shadow" type="button" id="btn-next">
             <i class="bi bi-chevron-right fs-4"></i>
           </button>

         </div>

         <div>
           <a href="formulario.php" class="btn  btn-orcamento-categoria">Solicitar Orçamento</a>
         </div>

       </div>

     </section>
     <!-- FAIXA VERDE COM AS IMAGENS DE UM PROJETO -->
     <section class="position-relative">

       <div class="green-bar">
         <h1>Caminho Criativo</h1>
         <p class="l">A importância dos processos em móveis planejados está na <br> garantia de um produto final que
           combina funcionalidade, <br> qualidade e design personalizado para melhor atender você!</p>
       </div>

       <div class="image-overlays">
         <img src="fotos/processos/743709CC-F0FF-491C-BEF2-DA3854B7E672.PNG" class="img-block img-1" alt="img1" />
         <img src="fotos/processos/WhatsApp Image 2025-05-29 at 10.27.55.jpeg" class="img-block img-2" alt="img2" />
         <img src="fotos/processos/855b3222-db65-4bbd-b865-c1834a81cefc.JPG" class="img-block img-3" alt="img3" />
       </div>
     </section>

     <!-- PARTE QUE FALA SOBRE O DONO E SOBRE A EMPRESA -->

     <section id="sobre-mim">
       <div class="container">

         <div class="imagem">
           <img src="fotos/sobre-nos/jefferson.jpg" alt="Foto sobre mim">
         </div>

         <div class="conteudo">
           <h2 class="sobre">Nossa Identidade</h2>
           <h3 class="sobre">Jefferson Ribeiro</h3>
           <p>
             Proprietário da empresa<strong> JR Ambientes Planejados</strong>, com mais de 6 anos de experiência no mercado de móveis sob medida. Buscando sempre evolução tanto na área pessoal quanto profissionalmente, com foco... <a href="sobre-nos.php" class="ver-mais">saiba mais</a>
           </p>
         </div>

       </div>
     </section>

     <!-- FEEDBACK -->
     <section id="feedback">
       <div class="feedback-section">

         <h2 class="feed">O que nossos clientes dizem!</h2>

         <div class="feedback-track" id="feedbackTrack">

           <div class="feedback-card">
             <div class="line-vertical"></div>

             <img
               src="fotos/feedback/Maria.jpeg"
               alt="Pessoa 1" class="avatar">

             <div class="content">
               <p class="feedback-maria ">"Eu amei minha cozinha, recomendo esse trabalho maravilhoso."</p>
               <p class="nome">Maria Piruk </p>
             </div>

           </div>

           <div class="feedback-card">
             <div class="line-vertical"></div>

             <img
               src="fotos/feedback/willian.jpeg"
               alt="Pessoa 2" class="avatar">

             <div class="content">
               <p class="feedback-wii">"Ficou perfeito, qualidade, cuidado em cada detalhe mesmo eu sendo exigente, entrega antes do prazo, recomendo com certeza"</p>
               <p class="nome">Willian Trento</p>
             </div>

           </div>

           <div class="feedback-card">
             <div class="line-vertical"></div>

             <img
               src="fotos/feedback/mari.jpeg"
               alt="Pessoa 2" class="avatar">

             <div class="content">
               <p class="feedback-mari">"Um trabalho de qualidade feito com muito carinho e muito capricho em cada detalhe."</p>
               <p class="nome">Marinete Ferreira</p>
             </div>

           </div>

           <div class="feedback-card">
             <div class="line-vertical"></div>

             <img
               src="fotos/feedback/andreo.jpeg"
               alt="Pessoa 2" class="avatar">

             <div class="content">
               <p class="feedback-andreo">"Os móveis ficaram lindos, super funcionais e bem planejados para o espaço!"</p>
               <p class="nome">Andreo Santana</p>
             </div>

           </div>

           <div class="feedback-card">
             <div class="line-vertical"></div>

             <img
               src="fotos/feedback/sid.jpeg"
               alt="Pessoa 1" class="avatar">

             <div class="content">
               <p class="feedback-sid ">"Parabéns pessoal ficou muito bom, os irmaos da igreja amaram, ficou lindo, uniu beleza e custos. Super indicamos, gratidão. 🙏"</p>
               <p class="nome">Siderlei Dias</p>
             </div>

           </div>

         </div>
       </div>
     </section>

     <!-- LOCALIZAÇÃO -->
     <section id="localizacao">

       <h2 class="onde">Onde nos encontrar?</h2>

       <p class="endereco">
         Endereço: Vila Rural Andorinha, Rua Aparecida Bernardo Valarini (Casa de esquina), Araruna - BR
       </p>
       <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.411909899734!2d-52.5136421!3d-23.922434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed6f00001c1a21%3A0x9fa0bab7e9b0f8e0!2sRibeiro%20Ambientes%20Planejados!5e1!3m2!1spt-BR!2sbr!4v1748872670819!5m2!1spt-BR!2sbr"
         width="95%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade" class="mapa"></iframe>

       <div>
         <a href="formulario.php" class="btn  btn-orcamento-localizacao ">Entre em Contato</a>
       </div>
     </section>


     <!-- Ícones Font Awesome (necessário para os ícones) -->
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <button id="btnTopo" title="Voltar ao topo">
      ↑
    </button>

   </main>

   <?php include 'componentes/footer.html'; ?>

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

   <!-- CATEGORIAS -->
   <script>
     document.addEventListener("DOMContentLoaded", () => {
       const carousel = document.getElementById("categoryCarousel");

       function duplicateCards() {
         const cards = Array.from(carousel.querySelectorAll(".category-card"));
         const originals = [...cards];

         // Duplicar ao final
         originals.forEach(card => {
           const clone = card.cloneNode(true);
           carousel.appendChild(clone);
         });

         // Duplicar ao início
         originals.slice().reverse().forEach(card => {
           const clone = card.cloneNode(true);
           carousel.insertBefore(clone, carousel.firstChild);
         });
       }

       duplicateCards();

       const card = carousel.querySelector(".category-card");
       const cardWidth = card.offsetWidth + 20;
       const totalOriginalCards = carousel.querySelectorAll(".category-card").length / 3;

       const startScroll = cardWidth * totalOriginalCards;
       carousel.scrollLeft = startScroll;

       // Função que garante que o scroll nunca chegue perto do fim
       function loopScrollCheck() {
         const current = carousel.scrollLeft;
         const max = cardWidth * totalOriginalCards * 2;
         const min = 0;

         // Se muito à esquerda → volta para o centro equivalente
         if (current <= cardWidth) {
           carousel.style.scrollBehavior = "auto";
           carousel.scrollLeft = current + (cardWidth * totalOriginalCards);
           requestAnimationFrame(() => {
             carousel.style.scrollBehavior = "smooth";
           });
         }

         // Se muito à direita → volta para o centro equivalente
         if (current >= max - cardWidth) {
           carousel.style.scrollBehavior = "auto";
           carousel.scrollLeft = current - (cardWidth * totalOriginalCards);
           requestAnimationFrame(() => {
             carousel.style.scrollBehavior = "smooth";
           });
         }
       }

       carousel.addEventListener("scroll", loopScrollCheck);

       // Botões
       document.getElementById("btn-prev").addEventListener("click", () => {
         carousel.scrollLeft -= cardWidth;
       });

       document.getElementById("btn-next").addEventListener("click", () => {
         carousel.scrollLeft += cardWidth;
       });
     });
   </script>

   <script>
     window.addEventListener('DOMContentLoaded', () => {
       const track = document.getElementById('feedbackTrack');
       const cards = Array.from(track.children);

       // Clona os cards para criar o efeito de loop infinito
       cards.forEach(card => {
         const clone = card.cloneNode(true);
         track.appendChild(clone);
       });
     });
   </script>

 </body>

 </html>