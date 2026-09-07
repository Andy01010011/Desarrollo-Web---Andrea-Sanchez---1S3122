**Descripción General del Repositorio**
Este repositorio contiene la recopilación y solución completa de las prácticas y laboratorios de la materia Desarrollo Web. Se abarca desde la introducción al lenguaje PHP, maquetación estandarizada en HTML5 y hojas de estilo CSS externas, hasta la estructuración semántica y validación de datos en formularios web.

-----

**Laboratorio 1 - Desarrollo Web**
**Descripción del Proyecto**
Este repositorio contiene la solución completa de los ejercicios del Laboratorio #1. Se desarrollaron programas interactivos e integrados con PHP y HTML para resolver problemas matemáticos, conversiones de unidades, manejo de cadenas y procesamiento de formularios con validación de datos.

**Mejoras de Interfaz y Diseño (CSS)**
Para cumplir con los criterios de la rúbrica, se implementó una interfaz moderna con:
* Fondo general: Azul pizarra oscuro (#1e293b).
* Tarjetas y formularios: Azul medianoche (#0f172a) con bordes redondeados y sombras suaves.
* Botones y acentos: Cian turquesa (#0891b2) con efectos interactivos de paso del mouse (:hover).
* Resultados y Alertas: Verde esmeralda (#064e3b) para operaciones exitosas y rojo vino (#7f1d1d) para errores de validación.
* Organización: Separación visual mediante tarjetas independientes para facilitar la lectura de resultados.

**Validaciones y Lógica Implementada**
* Saneamiento de entradas: Uso de trim() y htmlspecialchars() para prevenir vulnerabilidades XSS.
* Validación de tipos: Comprobación estricta de números y rangos (filter_var, is_numeric, empty).

---

**Laboratorio 2 - Desarrollo Web**
**Descripción del Proyecto**
El Laboratorio #2 se enfoca en el dominio de la maquetación web con HTML5 semántico, la estructuración avanzada de tablas de datos y la implementación rigurosa de hojas de estilo CSS. Se incorporan ejemplos prácticos de selectores por clase, ID, selectores descendentes, estados pseudo-clases (:hover) y validaciones visuales con atributos nativos de HTML5.

**Novedades y Diferencias con el Laboratorio #1**
* Separación de CSS en Archivos Externos: A diferencia del Laboratorio #1 donde los estilos estaban incrustados dentro de cada archivo PHP/HTML, en esta entrega los estilos se modularizan en archivos .css independientes vinculados desde la etiqueta head.
* Estructuración Semántica HTML5: Se sustituyen las divisiones genéricas por etiquetas semánticas con propósito específico como header, nav, main, section, article, aside y footer.
* Tablas Avanzadas e Intercaladas: Implementación de atributos como headers, id, axis, colspan y clases personalizadas (.modo1 y .modo2) para lograr diseños de tablas estilizadas e intercaladas.
* Selectores CSS Complejos: Uso de selectores descendentes (p strong) y selectores pseudo-clases de validación nativa en formularios (input:required:invalid e input:required:valid).
