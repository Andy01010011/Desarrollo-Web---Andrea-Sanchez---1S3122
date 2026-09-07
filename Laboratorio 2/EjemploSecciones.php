<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Estructura con Secciones Semánticas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header, nav, main, section, article, aside, footer {
            padding: 1.5em;
            margin: 0.5em;
            border: 2px dashed #ccc;
        }

        header { background-color: #f4f4f4; }
        nav { background-color: #e2e2e2; }
        main { background-color: #fff; }
        section { background-color: #fafafa; }
        article { background-color: #f0f8ff; }
        aside { background-color: #fff8dc; }
        footer { background-color: #333; color: #fff; }
    </style>
</head>
<body>

    <!-- Cabecera principal de la página -->
    <header>
        <h1>Diseño Web con HTML5 y CSS3</h1>
        <p>Aprendiendo HTML5 y CSS paso a paso</p>
    </header>

    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#cursos">Cursos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenido principal -->
    <main>

        <!-- Sección general de contenido -->
        <section id="cursos">
            <h2>Nuestros Cursos Disponibles</h2>
            <p>Aquí agrupamos información relacionada con la oferta académica de programación.</p>

            <!-- Artículo independiente dentro de la sección -->
            <article>
                <h3>Curso de Backend con PHP</h3>
                <p>Aprende a manejar bases de datos, lógica de servidores y frameworks modernos.</p>
            </article>

            <!-- Otro artículo independiente -->
            <article>
                <h3>Curso de CSS Avanzado</h3>
                <p>Domina la cascada, especificidad, selectores y diseños responsivos.</p>
            </article>
        </section>

        <!-- Barra lateral o contenido complementario -->
        <aside>
            <h4>Aviso Importante</h4>
            <p>HTML5 es la quinta y última versión del Lenguaje de Marcado de Hipertexto...</p>
        </aside>

    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Universidad Tecnológica de Panamá. Todos los derechos reservados.</p>
    </footer>

</body>
</html>