<?php 
// Modulo de inclusión de cabecera
include_once 'includes/header.php'; 
?>

<main class="container py-5">
    <section class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4 fw-bold text-primary">Formulario de Registro de Aspirantes</h2>
                    
                    <form action="procesar.php" method="POST" enctype="multipart/form-data">
                        <!-- Nombre (Requerido) -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre (Requerido):</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej. Sofía" required>
                        </div>

                        <!-- Apellido (Requerido) -->
                        <div class="mb-3">
                            <label for="apellido" class="form-label fw-bold">Apellido (Requerido):</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ej. Morales" required>
                        </div>

                        <!-- Identificación (Requerido) -->
                        <div class="mb-3">
                            <label for="identificacion" class="form-label fw-bold">Identificación (Requerido):</label>
                            <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Ej. 8-123-4567" required>
                        </div>

                        <!-- Fecha de Nacimiento (Requerido) -->
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label fw-bold">Fecha de Nacimiento (Requerido):</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                        </div>

                        <!-- Sexo (Requerido) -->
                        <div class="mb-3">
                            <label class="form-label fw-bold d-block">Sexo (Requerido):</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="sexo" id="hombre" value="Hombre" required>
                                <label class="btn btn-outline-primary" for="hombre">Hombre</label>

                                <input type="radio" class="btn-check" name="sexo" id="mujer" value="Mujer" required>
                                <label class="btn btn-outline-primary" for="mujer">Mujer</label>
                            </div>
                        </div>

                        <!-- Fotografía del Aspirante -->
                        <div class="mb-4">
                            <label for="foto" class="form-label fw-bold">Fotografía del Aspirante (png, jpg, jpeg, gif, webp):</label>
                            <input type="file" class="form-control" name="foto" id="foto" accept=".png, .jpg, .jpeg, .gif, .webp" required>
                        </div>

                        <!-- Botón Submit -->
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold fs-5">Registrar Aspirante</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
// Modulo de inclusión de pie de página
include_once 'includes/footer.php'; 
?>