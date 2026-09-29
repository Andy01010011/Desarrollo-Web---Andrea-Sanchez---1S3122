<?php
include_once 'includes/header.php';

date_default_timezone_set('America/Panama');
$fechaProcesamiento = date('d/m/Y h:i:s a');

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 1. Captura, Saneamiento y Limpieza de Espacios
    $nombreRaw = trim(strip_tags($_POST['nombre'] ?? ''));
    $apellidoRaw = trim(strip_tags($_POST['apellido'] ?? ''));
    $identificacionRaw = trim(strip_tags($_POST['identificacion'] ?? ''));
    $fechaNacimientoRaw = trim(strip_tags($_POST['fecha_nacimiento'] ?? ''));
    $sexoRaw = trim(strip_tags($_POST['sexo'] ?? ''));

    // 2. Validación de Campos Vacíos
    if (empty($nombreRaw)) {
        $errores[] = "El nombre del aspirante es un campo requerido.";
    }
    if (empty($apellidoRaw)) {
        $errores[] = "El apellido del aspirante es un campo requerido.";
    }
    if (empty($identificacionRaw)) {
        $errores[] = "La cédula o identificación es requerida.";
    }
    if (empty($fechaNacimientoRaw)) {
        $errores[] = "Debe proporcionar una fecha de nacimiento válida.";
    }
    if (empty($sexoRaw)) {
        $errores[] = "Debe seleccionar una opción de sexo.";
    }

    // 3. Normalización de Textos (Materia & Rúbrica)
    // Nombre y Apellido -> Formato Tipo Título (ej. "sofia" -> "Sofía")
    $nombre = htmlspecialchars(ucwords(strtolower($nombreRaw)));
    $apellido = htmlspecialchars(ucwords(strtolower($apellidoRaw)));
    
    // Identificación -> Mayúsculas Cerradas (ej. "8-123-4567")
    $identificacion = htmlspecialchars(strtoupper($identificacionRaw));
    $sexo = htmlspecialchars($sexoRaw);

    // 4. Cálculo de Edad y Validación del Rango (18 a 70 años)
    $edad = 0;
    if (!empty($fechaNacimientoRaw)) {
        try {
            $fechaNac = new DateTime($fechaNacimientoRaw);
            $hoy = new DateTime();
            $diferencia = $hoy->diff($fechaNac);
            $edad = $diferencia->y;

            if ($edad < 18 || $edad > 70) {
                $errores[] = "La edad calculada es de <strong>$edad años</strong>. El rango permitido para el registro de admisión es de 18 a 70 años.";
            }
        } catch (Exception $e) {
            $errores[] = "Ocurrió un error con el formato de la fecha de nacimiento.";
        }
    }

    // 5. Validación y Procesamiento de la Fotografía
    $fotoGuardada = false;
    $rutaDestinoFinal = "";

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreOriginal = $_FILES['foto']['name'];
        $extension = strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
        
        // Extensiones permitidas (incluyendo webp)
        $extensionesPermitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($extension, $extensionesPermitidas)) {
            // Nombre único con uniqid para evitar conflictos/sobreescrituras
            $nuevoNombreFoto = uniqid('aspirante_') . '.' . $extension;
            $directorioSubida = 'uploaded_files/';
            $rutaDestinoFinal = $directorioSubida . $nuevoNombreFoto;

            if (!move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestinoFinal)) {
                $errores[] = "Error al mover el archivo de la foto al directorio de destino.";
            } else {
                $fotoGuardada = true;
            }
        } else {
            $errores[] = "El archivo subido no es una imagen permitida (Formatos válidos: JPG, JPEG, PNG, GIF, WEBP).";
        }
    } else {
        $errores[] = "Es obligatorio adjuntar una fotografía del aspirante.";
    }

    // 6. Despliegue de Resultados con Bootstrap
?>

<main class="container py-5">
    <section class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <?php if (!empty($errores)): ?>
                <!-- Alerta de Errores -->
                <div class="card shadow-sm border-0 rounded-3 border-start border-danger border-5">
                    <div class="card-body p-4">
                        <h3 class="card-title text-danger fw-bold mb-3">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>Errores de Validación
                        </h3>
                        <ul class="mb-3">
                            <?php foreach ($errores as $error): ?>
                                <li class="text-dark"><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="index.php" class="btn btn-outline-danger font-bold"><i class="bi bi-arrow-left me-1"></i>Volver al Formulario</a>
                    </div>
                </div>

            <?php else: ?>
                <!-- Resultado Exitoso -->
                <div class="card shadow-sm border-0 rounded-3 border-start border-success border-5">
                    <div class="card-body p-4">
                        <h3 class="card-title text-success fw-bold mb-3">
                            <i class="bi bi-check-circle-fill me-2"></i>¡Aspirante Registrado Correctamente!
                        </h3>
                        <p class="text-muted small"><strong>Procesado el:</strong> <?php echo $fechaProcesamiento; ?></p>
                        
                        <div class="row align-items-center mt-4">
                            <div class="col-md-7">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Nombre Completo:</strong> <?php echo "$nombre $apellido"; ?></li>
                                    <li class="list-group-item"><strong>Identificación:</strong> <?php echo $identificacion; ?></li>
                                    <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($fechaNacimientoRaw); ?></li>
                                    <li class="list-group-item"><strong>Edad Calculada:</strong> <?php echo $edad; ?> años</li>
                                    <li class="list-group-item"><strong>Sexo:</strong> <?php echo $sexo; ?></li>
                                </ul>
                            </div>
                            
                            <?php if ($fotoGuardada): ?>
                            <div class="col-md-5 text-center mt-3 mt-md-0">
                                <p class="fw-bold mb-2">Foto de Perfil</p>
                                <img src="<?php echo $rutaDestinoFinal; ?>" alt="Foto Aspirante" class="img-fluid rounded border shadow-sm style-photo" style="max-height: 200px; object-fit: cover;">
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-4">
                            <a href="index.php" class="btn btn-primary w-100 fw-bold"><i class="bi bi-plus-circle me-1"></i> Registrar Otro Aspirante</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php 
} else {
    echo "<div class='container py-5'><div class='alert alert-warning text-center'>Acceso no autorizado. Por favor use el formulario oficial.</div></div>";
}

include_once 'includes/footer.php'; 
?>