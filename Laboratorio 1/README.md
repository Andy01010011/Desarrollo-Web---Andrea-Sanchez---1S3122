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

---

## 🖼️ Ilustración y Evidencias Visuales

### Calculadora
<img width="601" height="619" alt="image" src="https://github.com/user-attachments/assets/d4ad0aa3-f386-40b7-91b5-60351dc3ac60" />
<img width="417" height="589" alt="Captura de pantalla 2026-10-07 084059" src="https://github.com/user-attachments/assets/1f568d45-4f4b-4dcc-b410-af8bb258e615" />

### Área y perímetro de un circulo
<img width="592" height="645" alt="image" src="https://github.com/user-attachments/assets/1399e59a-7233-4afa-b0ca-82da6c8d151c" />
<img width="365" height="303" alt="Captura de pantalla 2026-10-07 084123" src="https://github.com/user-attachments/assets/3eccdfb7-9f18-460d-b30a-96e68b87290f" />

### Conversor
<img width="594" height="647" alt="image" src="https://github.com/user-attachments/assets/80ea4782-42dd-4b5e-ad93-ba4af3589b41" />
<img width="458" height="285" alt="Captura de pantalla 2026-10-07 084156" src="https://github.com/user-attachments/assets/b75d509b-4b2b-455e-bdd6-b83feff2bbba" />

### PHP Embebido
<img width="500" height="238" alt="image" src="https://github.com/user-attachments/assets/a90b958a-f99d-4018-8fb5-6d8d8dd7bc30" />
<img width="445" height="112" alt="Captura de pantalla 2026-10-07 084221" src="https://github.com/user-attachments/assets/d80f61a2-34b4-4d84-8266-c2e4e465b863" />

### Formulario 
<img width="595" height="616" alt="image" src="https://github.com/user-attachments/assets/c240ee13-488e-43c9-bab6-f48e0b3c24a7" />
<img width="365" height="374" alt="Captura de pantalla 2026-10-07 084249" src="https://github.com/user-attachments/assets/ed98c275-c4e1-4569-be34-3e38190cd0ee" />

### Hola mundo
<img width="209" height="108" alt="image" src="https://github.com/user-attachments/assets/50888137-b15f-4245-9f87-8c42d84408b8" />
<img width="573" height="482" alt="Captura de pantalla 2026-10-07 084326" src="https://github.com/user-attachments/assets/72de705e-9ae9-48ab-8d53-ae71cfc21c2a" />

### Imprimir cadenas
<img width="578" height="646" alt="image" src="https://github.com/user-attachments/assets/dd471455-bab2-4b0c-b625-a7190e563bd4" />
<img width="434" height="506" alt="Captura de pantalla 2026-10-07 084352" src="https://github.com/user-attachments/assets/3925875e-7337-4aa1-879a-bace82a32dfd" />

### Operaciones matematicas
<img width="577" height="618" alt="image" src="https://github.com/user-attachments/assets/51ed971d-2b9f-4d8f-af2f-e71881a06516" />
<img width="372" height="596" alt="Captura de pantalla 2026-10-07 084443" src="https://github.com/user-attachments/assets/383a3440-8cf8-4ee1-8674-987abb41a460" />

### Formulario 2
<img width="602" height="647" alt="image" src="https://github.com/user-attachments/assets/e4e9f579-454b-4bf3-bcdd-5032d17eb476" />
<img width="369" height="404" alt="Captura de pantalla 2026-10-07 084553" src="https://github.com/user-attachments/assets/85b4df6f-2b8a-4f7f-bc12-181735959053" />

### Variables
<img width="683" height="142" alt="image" src="https://github.com/user-attachments/assets/bacff785-b2a0-4b80-9b79-f08a105a2f50" />
<img width="495" height="184" alt="Captura de pantalla 2026-10-07 084612" src="https://github.com/user-attachments/assets/40fffd28-7052-46a4-9f27-74d8539b1365" />

### Verificacion PHP
<img width="243" height="104" alt="image" src="https://github.com/user-attachments/assets/d8e2a401-eda6-497d-92a8-4ad5314acfa8" />
<img width="951" height="589" alt="Captura de pantalla 2026-10-07 084637" src="https://github.com/user-attachments/assets/cf973f17-60fd-4c10-a366-7a33226363f3" />
