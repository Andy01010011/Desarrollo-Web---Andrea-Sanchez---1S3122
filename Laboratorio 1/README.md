# Laboratorio #1 - Introducción al Lenguaje PHP

**Materia:** Desarrollo Web  
**Estudiante:** Andrea Sánchez  
**Cédula:** 8-1044-1308  
**Carrera:** Licenciatura en Ciberseguridad  
**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Facilitadora:** Ing. Irina Fong  

---

## 📝 Descripción del Proyecto
Este módulo corresponde al **Laboratorio #1** de la asignatura **Desarrollo Web**. Consiste en una serie de programas interactivos desarrollados en **PHP embebido** y maquetación **HTML5** para resolver problemas matemáticos, conversiones de unidades, manipulación de cadenas de texto y procesamiento seguro de formularios mediante métodos `GET` y `POST`.

---

## 🎨 Interfaz y Estilos (Dark Slate & Teal)
Para cumplir con los criterios de la rúbrica sobre **Valor Agregado y CSS**, se implementó una interfaz unificada y moderna adaptada al tema **Dark Slate & Teal**:

* **Fondo general:** Azul pizarra oscuro (`#1e293b`).
* **Tarjetas y formularios:** Azul medianoche (`#0f172a`) con bordes redondeados y sombras suaves.
* **Botones y acentos:** Cian turquesa (`#0891b2`) con efectos interactivos de paso del mouse (`:hover`).
* **Resultados y Alertas:** Verde esmeralda (`#064e3b`) para operaciones exitosas y rojo vino (`#7f1d1d`) para errores de validación.
* **Organización visual:** Separación clara mediante tarjetas independientes para facilitar la lectura de los resultados.

---

## 🛡️ Funciones de Seguridad, Sanitización y Validaciones

1. **Saneamiento y Seguridad (XSS):**
   * `trim()`: Elimina espacios en blanco innecesarios al inicio y final del texto.
   * `htmlspecialchars()`: Convierte caracteres especiales en entidades HTML seguras para prevenir vulnerabilidades de Scripting Entre Sitios (XSS).

2. **Validación Estricta de Entradas:**
   * Comprobación de valores numéricos y rangos válidos con `filter_var()`, `is_numeric()` y `empty()`.
   * Manejo condicional de decisiones (por ejemplo, verificación de derecho a voto según la edad ingresada).

3. **Impresión Dinámica y Formateo:**
   * Integración de la zona horaria de Panamá (`America/Panama`) e impresiones dinámicas de fecha con `date('d/m/Y h:i:s a')`.
   * Redondeo controlado de valores numéricos flotantes con `round()`, `ceil()` y `floor()`.
