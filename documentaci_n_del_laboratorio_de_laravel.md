# **Guía de Laboratorio: Autenticación con Laravel y Bootstrap**

**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Carrera:** Licenciatura en Ciberseguridad  
**Asignatura:** Desarrollo Web  
**Docente:** Ing. Irina Fong  
**Estudiante:** Andrea Sánchez (Cédula: 8-1044-1308)  

---

## **1. Descripción del Proyecto**
Este laboratorio consiste en el primer acercamiento e implementación práctica del framework **Laravel** utilizando el patrón de arquitectura **Modelo-Vista-Controlador (MVC)**. El objetivo principal es la creación, configuración y despliegue de un sistema completo de **Autenticación (Login y Registro)** estilizado mediante el paquete de Bootstrap con `laravel/ui`.

---

## **2. Requisitos Previos e Infraestructura**
Para la ejecución exitosa del proyecto en el entorno local de desarrollo se requirió la siguiente infraestructura:
* **Servidor Local:** XAMPP con motor MySQL activado.
* **Entorno de Ejecución Backend:** PHP v8.x.
* **Gestor de Dependencias de PHP:** Composer.
* **Entorno de Ejecución Frontend:** Node.js y npm.
* **Compilador de Assets Frontend:** Vite.

---

## **3. Desarrollo Paso a Paso**

### **Paso 3.1: Creación del Proyecto en Laravel**
Se navegó desde la consola de comandos hacia el directorio raíz del servidor local XAMPP (`C:\xampp\htdocs\`) y se generó la estructura base del proyecto denominado `PracticaLaravel`:
```bash
cd C:\xampp\htdocs\
composer create-project laravel/laravel PracticaLaravel
cd PracticaLaravel
```

### **Paso 3.2: Configuración de la Base de Datos (.env)**
Se creó la base de datos `practica_laravel` en phpMyAdmin (`http://localhost/phpmyadmin`) y se enlazó en el archivo de variables de entorno `.env` en la raíz del proyecto:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=practica_laravel
DB_USERNAME=root
DB_PASSWORD=
```

### **Paso 3.3: Preconfiguración de Longitud de Cadenas en la BD**
Para mitigar incompatibilidades de longitud en índices de cadenas durante las migraciones en MySQL, se agregó la regla por defecto en `app/Providers/AppServiceProvider.php`:
```php
use Illuminate\Support\Facades\Schema;

public function boot(): void
{
    Schema::defaultStringLength(191);
}
```

### **Paso 3.4: Ejecución de Migraciones de Base de Datos**
Se procedió a limpiar la caché del sistema de configuración y ejecutar las migraciones base de Laravel para generar la tabla de usuarios (`users`):
```bash
php artisan config:clear
php artisan config:cache
php artisan migrate
```

### **Paso 3.5: Instalación del Módulo de Autenticación con Bootstrap**
Se instaló el paquete de scaffolds oficial de Laravel (`laravel/ui`) y se generó el maquetado con vistas para Bootstrap:
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
```

### **Paso 3.6: Compilación e Instalación Frontend**
Se instalaron las librerías requeridas por Node y se ejecutó la compilación de estilos en tiempo real con Vite:
```bash
npm install
npm run dev
```

### **Paso 3.7: Ejecución del Servidor HTTP de PHP**
En una terminal paralela dentro del directorio del proyecto, se levantó el servidor de desarrollo en el puerto 8000:
```bash
php artisan serve
```

---

## **4. Manejo de Errores e Imprevistos Resueltos**

### **Incidencia #1: Reemplazo del Controlador Base en `artisan ui`**
* **Problema:** Al ejecutar el comando `php artisan ui bootstrap --auth`, la terminal solicitó confirmación al detectar la existencia previa de `Controller.php`.
* **Solución:** Se seleccionó la opción `yes` en la terminal para autorizar la actualización y maquetado de los controladores base necesarios para la autenticación.

### **Incidencia #2: Error de Ejecución Multiproceso con `composer run dev`**
* **Problema:** El comando `composer run dev` devolvió un error de salida `returned with error code 1` lanzado por `concurrently`. Este error ocurre debido a la presencia de múltiples scripts en segundo plano o bloqueos en el puerto 8000.
* **Solución:** Se optó por la separación modular de procesos en dos pestañas independientes dentro de la terminal de Visual Studio Code:
  1. **Terminal 1 (Backend):** `php artisan serve` ejecutando el servidor HTTP en `http://127.0.0.1:8000`.
  2. **Terminal 2 (Frontend):** `npm run dev` procesando la compilación continua en `http://localhost:5173/`.

---

## **5. Evidencias Visuales y Capturas de Pantalla**

### **5.1 Estructura del Código y Comandos**
*(Espacio reservado para agregar captura de la terminal de VS Code ejecutando `php artisan serve` y `npm run dev`)*
![Estructura del Proyecto y Terminal](img/terminal_ejecucion.png)

---

### **5.2 Formulario de Registro (`/register`)**
*(Espacio reservado para agregar captura del navegador web en `http://127.0.0.1:8000/register` mostrando el formulario con campos Name, Email Address, Password y Confirm Password)*
![Formulario de Registro](img/vista_registro.png)

---

### **5.3 Formulario de Inicio de Sesión (`/login`)**
*(Espacio reservado para agregar captura del navegador web en `http://127.0.0.1:8000/login` con el formulario estilizado con Bootstrap)*
![Formulario de Login](img/vista_login.png)

---

### **5.4 Confirmación en la Base de Datos (phpMyAdmin)**
*(Espacio reservado para agregar captura de la tabla `users` en phpMyAdmin mostrando la fila insertada con los datos del usuario registrado)*
![Tabla de Usuarios en phpMyAdmin](img/base_de_datos.png)

---

## **6. Referencias**
* Documentación Oficial de Laravel: [laravel.com/docs](https://laravel.com/docs)
* Guía de Laboratorio: Patrón MVC y Autenticación en Laravel (Ing. Irina Fong)