<!-- header.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ambientes Planejados</title>
  <link rel="icon" href="/fotos/logo/logo.png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Seu CSS principal -->
  <link rel="stylesheet" href="/css/style-formulario.css">
  <link rel="stylesheet" href="/css/style-header.css">

  <!-- Fonte personalizada -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<header>
  <div class="navbar navbar-expand-lg custom-header">
    <div class="d-flex">
      <!-- LOGO E NOME DA EMPRESA NO HEADER -->
      <div class="logo-container fixed">
        <img src="/fotos/logo/logo.png" alt="Logo" class="logo-header">
      </div>
      <div class="icon-logo">
        <span style="font-size: 32px;">A</span>mbientes <span style="font-size: 32px;">P</span>lanejados
      </div>
    </div>

    <!-- BOTAO DO HAMBURGUER NO RESPONSIVO -->
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 28px; color: #243511;"></i>
    </button>

    <!-- CLASSIFICAÇÕES DA PÁGINA DO MENU -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="d-flex navbar-nav align-items-center gap-4 ms-auto">
        <li class="nav-item">
          <a href="#categoria" class="icon-text">
            <i class="bi bi-tags-fill"></i>
            <span>Projetos</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#sobre-mim" class="icon-text">
            <i class="bi bi-person-lines-fill"></i>
            <span>Sobre Nós</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#feedback" class="icon-text">
