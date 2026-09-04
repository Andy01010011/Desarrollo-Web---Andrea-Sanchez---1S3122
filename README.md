Laboratorio 1 - Desarrollo Web

Descripción del Proyecto
Este repositorio contiene la solución completa de los ejercicios del Laboratorio #1. Se desarrollaron programas interactivos e integrados con PHP y HTML para resolver problemas matemáticos, conversiones de unidades, manejo de cadenas y procesamiento de formularios con validación de datos.

Mejoras de Interfaz y Diseño (CSS)
Para cumplir con los criterios de la rúbrica, se implementó una interfaz moderna con:
* Fondo general: Azul pizarra oscuro (#1e293b).
* Tarjetas y formularios: Azul medianoche (#0f172a) con bordes redondeados y sombras suaves.
* Botones y acentos: Cian turquesa (#0891b2) con efectos interactivos de paso del mouse (:hover).
* Resultados y Alertas: Verde esmeralda (#064e3b) para operaciones exitosas y rojo vino (#7f1d1d) para errores de validación.
* Organización: Separación visual mediante tarjetas independientes para facilitar la lectura de resultados.

Validaciones y Lógica Implementada
* Saneamiento de entradas: Uso de trim() y htmlspecialchars() para prevenir vulnerabilidades XSS.
* Validación de tipos: Comprobación estricta de números y rangos (filter_var, is_numeric, empty).
