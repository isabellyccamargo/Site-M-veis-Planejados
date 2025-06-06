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

    <!-- FONTE QUE ESTA SENDO APLICADA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <header>
        <div class="navbar navbar-expand-lg custom-header ">

            <div class="d-flex">
                <!-- LOGO E NOME DA EMPRESA NO HEADER -->
                <div class="logo-container fixed">
                    <img src="fotos/logo/logo.png" alt="Logo" class="logo-header">
                </div>

                <div class="icon-logo"><span style="font-size: 32px;">A</span>mbientes <span
                        style="font-size: 32px;">P</span>lanejados</div>

            </div>
            <!-- BOTAO DO HAMBURGUER NO RESPONSIVO -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list" style="font-size: 28px; color: #243511;"></i>
            </button>

            <!-- CLASSIFICAÇÕES DA PÁGINA DO MENU -->
             <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="d-flex navbar-nav align-items-center gap-4 ms-auto  ">

              <li class="nav-item">
                <a href="index.html#categoria" class="icon-text">
                  <i class=" bi-tags-fill "></i>
                  <span>Projetos</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.html#sobre-mim" class="icon-text">
                  <i class="bi bi-person-lines-fill "></i>
                  <span>Sobre Nós</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.html#feedback" class="icon-text">
                  <i class=" bi-chat-dots-fill"></i>
                  <span>Feedback</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.html#localizacao" class="icon-text">
                  <i class=" bi-geo-alt-fill"></i>
                  <span>Localização</span>
                </a>
              </li>

              <!-- UNDERLINE QUE ESTA ABAIXO DAS CLASSIFICAÇÕES DO MENU -->
              <div class="underline"></div>

              <!-- BOTÃO CTA NO MENU -->
              <a href="formulario.php" class="btn btn-orcamento">Faça seu orçamento</a>

            </ul>
          </div>
        </div>
        </div>
    </header>

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
        <form class="row g-3 justify-content-center needs-validation" action="servicos/envia-email.php" method="post" novalidate>
            <div class="col-8 ">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"   placeholder="Nome completo" required pattern="[A-Za-zÀ-ÿ\s]+">
                 <div class="invalid-feedback">
                    Campo Obrigatório! Apenas letras!
                 </div>
            </div>
            <div class="col-8">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required  placeholder="(00) 00000-0000" inputmode="numeric">
                <div class="invalid-feedback">
                    Campo Obrigatório!
                 </div>
            </div>
            <div class="col-8">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="seuemail@gmail.com" >
                <div class="invalid-feedback">
                    Campo Obrigatório! Digite um email válido "seuemail@gmail.com".
                 </div>
            </div>
            <!-- <div class="col-8">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required placeholder="Rua...">
                 <div class="invalid-feedback">
                    Campo Obrigatório!
                 </div>
            </div> -->
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
                        <input type="text" class="form-control" id="cep" required  name="cep" placeholder="00000-000" inputmode="numeric">
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

    <!-- FOOTER -->
    <footer class="bg- pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row text-md-left">

                <!-- Logo e descrição -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">
                    <img src="fotos/logo/logo.png" alt="Logo" class="logo-footer">
                    <h5 class=" nomeloja mb-4 font-weight-bold "><span style="font-size: 40px;">A</span>mbientes <span
                            style="font-size: 40px;">P</span>lanejados</h5>
                    <p class="loja">"Planejando ambientes, realizando sonhos."</p>
                </div>

                <!-- Links úteis -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="outro mb-4 font-weight-bold ">Links</h5>
                    <p class="outros"><a href="#" class="link text-decoration-none">Início</a></p>
                    <p class="outros"><a href="#" class="link text-decoration-none">Sobre Nós</a></p>
                    <p class="outros"><a href="#" class="link text-decoration-none">Categoria</a></p>
                    <p class="outros"><a href="#" class="link text-decoration-none">Feedback</a></p>
                    <p class="outros"><a href="#" class="link text-decoration-none">Localização</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="outro mb-4">Contato</h5>
                    <p class="outros"><i class="">Endereço: Vila Rural Andorinha, Rua Aparecida Bernardo Valarini (Casa
                            de esquina), Araruna - BR</i></p>

                </div>

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
                    <h5 class="outro mb-4 font-weight-bold ">Siga-nos</h5>
                    <p>
                        <a href="https://www.instagram.com/ribeiroambientesplanejados" target="_blank"
                            class="text-white me-3">
                            <i class="fab fa-instagram fa-lg"></i>
                            @ribeiroambientesplanejados
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/jefferson_ribeero?igsh=cHhkYjV0bTl1dm9r" target="_blank"
                            class=" icon text-white me-3"> <i class="fab fa-instagram fa-lg"></i>
                            @jefferson_ribeero
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/anaafreitas?igsh=dDdndjhkNHFiNzdx" target="_blank"
                            class=" icon text-white me-3"> <i class="fab fa-instagram fa-lg"></i>
                            @anaafreitas
                        </a>
                    </p>
                </div>

            </div>

            <!-- Linha horizontal -->
            <hr class=" linha mb-4">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p class="text-white">© 2025 Sua Marca. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ícones Font Awesome (necessário para os ícones) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<script>
  // Bootstrap custom validation
  (function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        // Validação custom e padrão
        if (!form.checkValidity() || !emailGmailValido()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()

  // Máscara telefone: (00) 00000-0000
  document.getElementById('telefone').addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, '')
    v = v.replace(/^(\d{2})(\d)/g, '($1) $2')
    v = v.replace(/(\d{5})(\d)/, '$1-$2')
    e.target.value = v.slice(0, 15)
  })

  // Máscara CEP: 00000-000
  document.getElementById('cep').addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, '')
    v = v.replace(/^(\d{5})(\d)/, '$1-$2')
    e.target.value = v.slice(0, 9)
  })

  // Validação do e-mail para terminar em @gmail.com
  function emailGmailValido() {
    const email = document.getElementById('email')
    if (!email.value.endsWith('@gmail.com')) {
      email.setCustomValidity("O e-mail deve terminar com @gmail.com")
      return false
    } else {
      email.setCustomValidity('')
      return true
    }
  }

  // Atualiza a validade enquanto digita
  document.getElementById('email').addEventListener('input', function () {
    emailGmailValido()
  })
</script>

</body>

</html>