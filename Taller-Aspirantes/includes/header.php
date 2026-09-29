<?php
// Detectamos el nombre del archivo actual para la navegación y breadcrumb dinámicos
$paginaActual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Admisión de la UTP</title>
    <meta name="description" content="Sistema de admisión de datos para aspirantes">
    <meta name="author" content="Universidad Tecnológica de Panamá / Estudiante">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#212529">

    <!-- Bootstrap v5.3.8 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<header>
    <!-- Navbar Principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-mortarboard-fill me-2"></i>PortalU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActual == 'index.php') ? 'active fw-bold' : ''; ?>" href="index.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActual == 'procesar.php') ? 'active fw-bold' : ''; ?>" href="procesar.php">Procesamiento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb Dinámico -->
    <div class="bg-white border-bottom py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Inicio</a></li>
                    
                    <?php if ($paginaActual == 'procesar.php'): ?>
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Registro</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Procesando Datos</li>
                    <?php else: ?>
                        <li class="breadcrumb-item active" aria-current="page">Registro de Aspirante</li>
                    <?php endif; ?>
                </ol>
            </nav>
        </div>
    </div>
</header>