# Laboratorio #2 - Maquetación HTML5 y CSS3 Separado

**Materia:** Desarrollo Web  
**Estudiante:** Andrea Sánchez  
**Cédula:** 8-1044-1308  
**Carrera:** Licenciatura en Ciberseguridad  
**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Facilitadora:** Ing. Irina Fong  

---

## 📝 Descripción del Proyecto
El **Laboratorio #2** se enfoca en el dominio de la maquetación web con HTML5 semántico, la estructuración avanzada de tablas de datos y la implementación rigurosa de hojas de estilo CSS3 separadas (*External CSS*). Se incorporan ejemplos prácticos de selectores por clase, ID, selectores descendentes, estados pseudo-clases (`:hover`) y validaciones visuales con atributos nativos de HTML5.

---

## 🏗️ Estructura de Carpetas y Archivos

```text
Practicas/
└── Laboratorio 2/
    ├── css/
    │   ├── estilos.css           # Hoja de estilos global (Dark Slate & Teal)
    │   ├── estilosTabla.css      # Estilos por clases para tablas intercaladas (.modo1, .modo2)
    │   ├── estilosParrafos.css   # Estilos para especificidad y selectores descendentes
    │   └── estilosEjemplo1.css   # Estilos para tarjetas, enlaces e ID
    ├── tablas.html               # Informe de gastos de viaje con metadatos y CSS separado
    ├── tablas2.html              # Tabla estilizada con clases intercaladas
    ├── parrafos.html            # Demostración de selectores descendentes (p strong)
    ├── Ejemplo1.html             # Uso de clases (.card-seccion), ID (#footer-recurso) y :hover
    ├── EjemploSecciones.php      # Maquetación semántica pura (<header>, <nav>, <main>, <aside>, <footer>)
    ├── ValidacionesHTML5.html    # Formulario con pseudo-clases :required:invalid y :required:valid
    └── README.md                 # Documentación del laboratorio
```

---

## 🌟 Novedades y Diferencias con el Laboratorio #1

* **Separación de CSS en Archivos Externos:** A diferencia del Laboratorio #1 donde los estilos estaban incrustados dentro de cada archivo PHP/HTML, en esta entrega los estilos se modularizan en archivos `.css` independientes ubicados dentro de la carpeta `css/` y vinculados desde la etiqueta `<head>`.
* **Estructuración Semántica HTML5:** Se sustituyen las divisiones genéricas (`<div>`) por etiquetas semánticas con propósito específico como `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>` y `<footer>`.
* **Tablas Avanzadas e Intercaladas:** Implementación de atributos de accesibilidad e identificación como `headers`, `id`, `axis`, `colspan` y clases personalizadas (`.modo1` y `.modo2`) para lograr diseños de tablas estilizadas e intercaladas.
* **Selectores CSS Complejos:** Uso de selectores descendentes (`p strong`), selectores de ID (`#footer-recurso`), selectores de clase (`.card-seccion`) y pseudo-clases de validación nativa en formularios (`input:required:invalid` e `input:required:valid`).

---

## 🎨 Interfaz y Estilos (Dark Slate & Teal)

* **Fondo General:** Azul pizarra oscuro (`#1e293b`).
* **Contenedores y Tarjetas:** Azul medianoche (`#0f172a`) con bordes redondeados y sombras suaves.
* **Acentos y Encabezados:** Cian turquesa (`#06b6d4` / `#38bdf8`).
* **Tablas e Intercalados:** Filas alternadas en tonos oscuros (`#1a2436`) y resaltados en azul/teal (`#0891b2`).

---

## 🚀 Instalación y Ejecución Local

1. Inicie el servidor Apache en **XAMPP / WampServer**.
2. Ubique la carpeta del proyecto en la ruta de su servidor local:
   `C:\xampp\htdocs\Practicas\Laboratorio 2\`
3. Acceda desde cualquier navegador web a los distintos ejercicios:
   ```text
   http://localhost/Practicas/Laboratorio%202/tablas.html
   http://localhost/Practicas/Laboratorio%202/tablas2.html
   http://localhost/Practicas/Laboratorio%202/EjemploSecciones.php
   ```