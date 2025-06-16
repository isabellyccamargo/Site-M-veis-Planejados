<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ambientes Planejados</title>
  <link rel="icon" href="fotos/logo/logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style-formulario.css">
  <link rel="stylesheet" href="css/style-header.css">
  <link rel="stylesheet" href="css/style-footer.css">

  <!-- FONTE QUE ESTA SENDO APLICADA -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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


    <div class="container-sm">

      <div>
        <h2 class="solicite">Solicite seu orçamento sem compromisso!</h2>
        <h3 class="entreEmContato">Preencha o formulário abaixo e entraremos em contato com você o mais breve possível.</h3>
      </div>
      <form id="formOrcamento" class="row g-3 justify-content-center needs-validation" action="servicos/envia-email.php" method="post" novalidate>
        <div class="col-8 ">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required pattern="[A-Za-zÀ-ÿ\s]+">
          <div class="invalid-feedback">
            Campo Obrigatório! Apenas letras!
          </div>
        </div>
        <div class="col-8">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" required placeholder="(00) 00000-0000" inputmode="numeric">
          <div class="invalid-feedback">
            Campo Obrigatório!
          </div>
        </div>
        <div class="col-8">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required placeholder="seuemail@email.com">
          <div class="invalid-feedback">
            Campo Obrigatório! Digite um email válido "seuemail@email.com".
          </div>
        </div>
        <div class="col-8 mx-auto d-flex justify-content-between flex-wrap gap-4">
          <div class="flex-fill col-2">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" class="form-select" name="estado" required>
              <option selected disabled value="">Selecione</option>
              <option>Paraná</option>
              <option>São Paulo</option>
              <option>Mato Grosso</option>
            </select>
            <div class="invalid-feedback">
              Campo Obrigatório!
            </div>
          </div>
          <div class=" flex-fill col-md-2 ">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required pattern="[A-Za-zÀ-ÿ\s]+">
            <div class="invalid-feedback">
              Campo Obrigatório!
            </div>
          </div>
          <div class="flex-fill col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" required name="cep" placeholder="00000-000" inputmode="numeric">
            <div class="invalid-feedback">
              Campo Obrigatório!
            </div>
          </div>
        </div>
        <div class="col-8">
          <label for="texto" class="form-label">Mensagem</label>
          <textarea type="text" class="form-control" id="texto" name="texto" placeholder="Informe alguns detalhes sobre a sua necessidade..." required></textarea>
          <div class="invalid-feedback">
            Campo Obrigatório!
          </div>
        </div>

        <div class="col-12 text-center">
          <button type="submit" class="btn">Enviar</button>
        </div>
      </form>
    </div>

    <button id="btnTopo" title="Voltar ao topo">
      ↑
    </button>


  </main>

  <?php include 'componentes/footer.html'; ?>

  <!-- Caixas de diálogo -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Ícones Font Awesome (necessário para os ícones) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Utilidade para exibir mensagens personalizadas
    function mostrarMensagem(tipo, titulo, mensagem) {
      const cores = {
        success: '#2f3e1d', // Verde escuro
        error: '#a94442', // Vermelho
        warning: '#8a6d3b', // Amarelo escuro
        info: '#31708f' // Azul escuro
      };

      Swal.fire({
        icon: tipo,
        title: titulo,
        text: mensagem,
        confirmButtonColor: cores[tipo] || '#2f3e1d',
        background: '#fdfae5', // Fundo bege claro
        color: '#2f3e1d', // Texto verde escuro
      });
    }

    //Exemplo de uso ao enviar um formulário:
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('formOrcamento');
      if (form) {
        form.addEventListener('submit', function(e) {
          e.preventDefault();

          const formData = new FormData(form);

          fetch('servicos/envia-email.php', {
              method: 'POST',
              body: formData
            })
            .then(response => response.json())
            .then(data => {
              if (data.sucesso) {
                mostrarMensagem('success', 'Mensagem enviada!', 'Obrigado por entrar em contato.');
              } else {
                mostrarMensagem('error', 'Erro!', data.mensagem || 'Não foi possível enviar sua mensagem.');
              }
            })
            .catch(error => {
              console.error('Erro na requisição:', error);
              mostrarMensagem('error', 'Erro!', 'Falha na comunicação com o servidor.');
            });
        });
      }
    });
  </script>

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

  <script>
    (() => {
      'use strict'

      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            return;
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

  <script>
    // Bootstrap custom validation
    (function() {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')

      Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
          // Validação custom e padrão
          if (!form.checkValidity() || !validaEmail()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()

    // Máscara telefone: (00) 00000-0000
    document.getElementById('telefone').addEventListener('input', function(e) {
      let v = e.target.value.replace(/\D/g, '')
      v = v.replace(/^(\d{2})(\d)/g, '($1) $2')
      v = v.replace(/(\d{5})(\d)/, '$1-$2')
      e.target.value = v.slice(0, 15)
    })

    // Máscara CEP: 00000-000
    document.getElementById('cep').addEventListener('input', function(e) {
      let v = e.target.value.replace(/\D/g, '')
      v = v.replace(/^(\d{5})(\d)/, '$1-$2')
      e.target.value = v.slice(0, 9)
    })

    // Validação do e-mail para terminar em @gmail.com
    function validaEmail() {
      const email = document.getElementById('email')
      if (!email.value.includes('@')) {
        email.setCustomValidity("E-mail inválido!")
        return false
      } else {
        email.setCustomValidity('')
        return true
      }
    }

    // Atualiza a validade enquanto digita
    document.getElementById('email').addEventListener('input', function() {
      validaEmail()
    })
  </script>

</body>

</html>