# Portafolio Académico - Desarrollo Web (UTP)

**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Departamento:** Departamento de Computación y Tecnología de Sistemas  
**Carrera:** Licenciatura en Ciberseguridad  
**Materia:** Desarrollo Web  
**Estudiante:** Andrea Sánchez  
**Cédula:** 8-1044-1308  
**Facilitadora:** Ing. Irina Fong  

---

## 📌 Propósito del Repositorio

Este repositorio contiene la recopilación ordenada y documentada de todas las asignaciones, laboratorios prácticos y talleres desarrollados durante el curso de **Desarrollo Web**. 

El objetivo principal de este portafolio es demostrar el dominio progresivo en la construcción de aplicaciones web seguras, funcionales y adaptativas, abarcando desde la maquetación semántica en HTML5 y CSS3 hasta la programación en el servidor con PHP, el saneamiento de datos contra vulnerabilidades web (XSS, inyecciones) y la modularización de componentes.

---

## 📂 Índice de Contenidos y Módulos

El repositorio está organizado en subcarpetas independientes, cada una con sus archivos de código fuente y su respectiva documentación interna:

### 1. 📁 [Laboratorio #1](./Laboratorio-1) - Introducción al Lenguaje PHP
* **Enfoque:** Sintaxis básica de PHP embebido en HTML5, operaciones aritméticas, funciones de redondeo (`round`, `ceil`, `floor`), saneamiento de cadenas (`trim`, `htmlspecialchars`, `strip_tags`) y procesamiento inicial de formularios con validación de mayoría de edad.
* **Diseño:** Implementación de la paleta de colores **Dark Slate & Teal**.

### 2. 📁 [Laboratorio #2](./Laboratorio-2) - Maquetación HTML5 y CSS3 Separado
* **Enfoque:** Estructuración semántica pura con etiquetas HTML5 (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`), creación de tablas avanzadas de datos con clases intercaladas (`.modo1`, `.modo2`) y separación rigurosa de hojas de estilo externas (`External CSS`).
* **Validaciones:** Uso de pseudo-clases de validación en formularios (`:required:invalid` e `:required:valid`).

### 3. 📁 [Taller #3 / Quiz #1](./Taller-Aspirantes) - Sistema de Admisión de Aspirantes (UTP)
* **Enfoque:** Aplicación web modular de backend y frontend con **Bootstrap v5.3.8**. Incluye captura, normalización de textos (formato tipo título y mayúsculas), cálculo de edad precisa mediante la clase `DateTime` de PHP (validando rango permitido de 18 a 70 años) y procesamiento seguro de fotografías de perfil subidas al servidor.
* **Seguridad:** Implementación de reglas de protección en `./uploaded_files/.htaccess` para restringir la ejecución de scripts en la carpeta de almacenamiento de medios.

---

## 🛠️ Tecnologías y Herramientas Utilizadas

* **Frontend:** HTML5 Semántico, CSS3, Bootstrap v5.3.8, Bootstrap Icons, JavaScript nativo.
* **Backend:** PHP 8.x (Programación modular, manejo de arrays, procesamiento de formularios GET/POST y subida de archivos `multipart/form-data`).
* **Seguridad Web:** Saneamiento de entradas contra XSS (`htmlspecialchars`, `strip_tags`), validación de tipos, restricción de extensiones de archivos (`.jpg`, `.jpeg`, `.png`, `.gif`, `.webp`) y protección de carpetas vía `.htaccess`.
* **Entorno de Desarrollo & Servidor Local:** Visual Studio Code, XAMPP / WampServer (Servidor Web Apache), Git, GitHub.

---

## 🚀 Instrucciones de Ejecución Local

1. Clonar el repositorio dentro del directorio raíz de su servidor local Apache (`htdocs` o `www`):
   ```bash
   git clone https://github.com/Andy01010011/Practicas-Andrea-Sanchez.git Practicas
   ```
2. Asegurarse de que el servidor local **Apache** esté activo en XAMPP / WampServer.
3. Acceder a los diferentes módulos desde cualquier navegador web a través de las siguientes rutas:
   * **Laboratorio 1:** `http://localhost/Practicas/Laboratorio-1/circulo.php`
   * **Laboratorio 2:** `http://localhost/Practicas/Laboratorio-2/tablas.html`
   * **Taller 3 (Aspirantes):** `http://localhost/Practicas/Taller-Aspirantes/index.php`

---

## 📜 Licencia y Derechos de Autor

Desarrollado como parte del plan de estudios de la **Universidad Tecnológica de Panamá (UTP)**.  
&copy; <?php echo date('Y'); ?> Andrea Sánchez - Todos los derechos reservados.
```

Este archivo `README.md` principal consolida el propósito del portafolio, el índice de laboratorios, el stack tecnológico y las instrucciones de ejecución. Puedes guardarlo directamente en la raíz de tu carpeta de trabajo (`C:\xampp\htdocs\Practicas\README.md`) y subirlo a GitHub.