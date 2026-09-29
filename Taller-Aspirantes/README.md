# Taller #3 - Sistema de Admisión de Aspirantes (UTP)

**Materia:** Desarrollo Web  
**Estudiante:** Andrea Sánchez 
**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Facilitadora:** Ing. Irina Fong  

---

## 📝 Descripción del Proyecto
Consiste en una aplicación web modular desarrollada en PHP y maquetada con **Bootstrap v5.3.8**, diseñada para el registro, sanitización, procesamiento y validación de datos de aspirantes universitarios, incluyendo la carga segura de fotografías de perfil sin uso de base de datos.

---

## 🏗️ Arquitectura y Estructura Modular

El proyecto implementa una arquitectura limpia y separada en componentes reutilizables:

```text
Practicas/
└── Taller-Aspirantes/
    ├── includes/
    │   ├── header.php       # Cabecera, metadatos, CDN Bootstrap, Navbar y Breadcrumb dinámico
    │   └── footer.php       # Pie de página con enlaces, eslogan y copyright con date('Y')
    ├── uploaded_files/
    │   ├── .gitkeep         # Control de versión para carpeta vacía
    │   └── .htaccess        # Regla de seguridad: inhabilita la ejecución de scripts
    ├── index.php            # Formulario visual con enctype="multipart/form-data"
    ├── procesar.php         # Backend procesador, sanitizador y validador
```

---

## 🎨 Interfaz y Maquetación (Bootstrap & HTML5 Semántico)

* **Etiquetas Semánticas:** Uso estricto de `<header>`, `<nav>`, `<main>`, `<section>` y `<footer>`.
* **Diseño Responsivo:** Integración de Bootstrap v5.3.8 CSS y Bootstrap Icons.
* **Navegación Dinámica:**
  * Menú de navegación activa que detecta la página actual usando `basename($_SERVER['PHP_SELF'])`.
  * Migas de pan (*Breadcrumb*) dinámicas según la ruta del usuario.
* **Metadatos Completos:** Configuración de `viewport` (`initial-scale=1.0`), `robots` (`noindex, nofollow`), `theme-color` y descripción institucional.

---

## 🛡️ Funciones de Seguridad, Sanitización y Normalización

1. **Saneamiento y Seguridad (XSS & Inyección):**
   * `strip_tags()`: Elimina etiquetas HTML o PHP no deseadas.
   * `htmlspecialchars()`: Convierte caracteres especiales a entidades HTML seguras.
   * `trim()`: Elimina espacios en blanco innecesarios al inicio y final del texto.

2. **Normalización de Texto (Tipo Título y Mayúsculas):**
   * **Nombre y Apellido:** Formateados a Formato Tipo Título mediante `ucwords(strtolower())` (ej. *"sofia"* $\rightarrow$ *"Sofía"*).
   * **Identificación:** Formateada a Mayúsculas Cerradas con `strtoupper()`.

3. **Cálculo Preciso de Edad:**
   * Procesamiento de fechas usando la clase nativa `DateTime` de PHP.
   * **Rango de Edad Permitido:** Validación estricta para aspirantes entre **18 y 70 años**.

4. **Tratamiento Seguro de Archivos (Subida de Imagen):**
   * Atributo `enctype="multipart/form-data"` obligatorio en el formulario.
   * **Formatos Permitidos:** `JPG`, `JPEG`, `PNG`, `GIF` y la extensión moderna `WEBP`.
   * **Renombrado Seguro:** Generación de identificadores únicos mediante `uniqid('aspirante_')` para evitar la sobreescritura de archivos.
   * **Protección de Directorio:** Inclusión de archivo `.htaccess` en `./uploaded_files/` que prohíbe la ejecución de scripts ejecutables PHP/HTML desde el navegador.
