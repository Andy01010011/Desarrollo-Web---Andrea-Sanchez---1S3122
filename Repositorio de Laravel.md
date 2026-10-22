# **Laboratorio - Implementación del Módulo de Login y Autenticación en Laravel**

## **1. Requisitos Previos e Infraestructura**

Para la correcta ejecución del entorno de desarrollo de este laboratorio se requirieron los siguientes componentes e infraestructura:

* **Sistema Operativo:** Windows 10 / 11
* **PHP:** Versión 8.x o superior
* **Gestor de Dependencias PHP:** Composer (última versión estable)
* **Servidor Web Local / Entorno de Desarrollo:** XAMPP
* **Servidor HTTP:** Apache 2.4
* **Base de Datos:** MySQL / MariaDB
* **Entorno de Ejecución Frontend:** Node.js (`npm`)
* **Editor de Código:** Visual Studio Code

---

## **2. Introducción al Patrón MVC y Objetivos del Laboratorio**

### **2.1 Arquitectura Modelo-Vista-Controlador (MVC) en Laravel**
El framework Laravel implementa el patrón de diseño arquitectónico **MVC**, el cual separa la lógica de negocio, la presentación visual y la gestión de datos en tres capas fundamentales:

* **Modelos (`app/Models/`):** Representan la estructura de datos y las reglas de negocio de la aplicación. Interactúan directamente con la base de datos a través del ORM Eloquent. Por ejemplo, el modelo `User.php` gestiona la información de los usuarios registrados.
* **Vistas (`resources/views/`):** Contienen la interfaz gráfica y la estructura HTML/Blade que se muestra al usuario. Incluye los formularios de inicio de sesión (`login.blade.php`), registro (`register.blade.php`) y la vista principal (`home.blade.php`).
* **Controladores (`app/Http/Controllers/`):** Actúan como intermediarios entre el Modelo y la Vista. Procesan las solicitudes HTTP del usuario, ejecutan la validación de credenciales y retornan la respuesta o redirección correspondiente.
* **Rutas (`routes/web.php`):** Definen las URLs de la aplicación y asignan cada petición HTTP a su controlador correspondiente.

### **2.2 Objetivo del Laboratorio**
Implementar y documentar el módulo de autenticación (Login, Registro y Gestión de Sesión) en una aplicación desarrollada con Laravel, garantizando la correcta interacción con la base de datos MySQL mediante migraciones y la integración visual con Bootstrap.

---

## **3. Flujo de Comandos y Pasos de Instalación**

A continuación se detalla la secuencia de comandos ejecutados para la creación y configuración del laboratorio:

### **3.1 Creación del Proyecto Laravel**
```bash
composer create-project laravel/laravel PracticaLaravel
cd PracticaLaravel
```
<img width="1061" height="637" alt="Captura de pantalla 2026-10-22 103634" src="https://github.com/user-attachments/assets/91727c2c-e3e5-4066-8b9f-f9bbaf722939" />

### **3.2 Instalación del Paquete de Autenticación (`laravel/ui`)**
Se utilizó el paquete oficial de scaffolds para generar las vistas y controladores de autenticación con Bootstrap:
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
```
<img width="649" height="643" alt="Captura de pantalla 2026-10-22 104025" src="https://github.com/user-attachments/assets/bf825abc-d2f7-492b-8a98-9445b7b85645" />
<img width="663" height="119" alt="Captura de pantalla 2026-10-22 100711" src="https://github.com/user-attachments/assets/c0aac164-e0ee-4a0d-9a1b-58d02e7204fb" />


### **3.3 Compilación de Assets Frontend**
Instalación de dependencias de Node y compilación continua de estilos mediante Vite:
```bash
npm install
npm run dev
```
<img width="642" height="258" alt="Captura de pantalla 2026-10-22 104124" src="https://github.com/user-attachments/assets/3c3c734c-775a-4599-b262-723ba162bf0d" />
<img width="303" height="165" alt="Captura de pantalla 2026-10-22 102316" src="https://github.com/user-attachments/assets/53a01a70-f06f-453c-9de8-1ad6b758d20e" />


### **3.4 Limpieza de Caché y Ejecución de Migraciones**
```bash
php artisan config:clear
php artisan config:cache
php artisan migrate
```
<img width="522" height="258" alt="Captura de pantalla 2026-10-22 103947" src="https://github.com/user-attachments/assets/a75367d0-46c7-4e56-9736-93097557bfaa" />


### **3.5 Despliegue del Servidor HTTP**
```bash
php artisan serve
```
<img width="1025" height="297" alt="Captura de pantalla 2026-10-22 104224" src="https://github.com/user-attachments/assets/d1607a32-f6d4-4d6b-a36e-e93081320ebf" />


---

## **4. Configuración de la Base de Datos y Migraciones**

### **4.1 Configuración de Variables de Entorno (`.env`)**
Se configuraron las credenciales de acceso para enlazar la aplicación con el servidor MySQL local de XAMPP:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=practica_laravel
DB_USERNAME=root
DB_PASSWORD=
```
<img width="162" height="106" alt="image" src="https://github.com/user-attachments/assets/687fc267-7b12-4966-b3f8-cb6bccd5618c" />


### **4.2 Preconfiguración de Longitud de Cadenas en la BD**
Para evitar errores de compatibilidad con los índices de cadenas en MySQL durante la ejecución de las migraciones, se modificó el archivo `app/Providers/AppServiceProvider.php`:

```php
use Illuminate\Support\Facades\Schema;

public function boot(): void
{
    Schema::defaultStringLength(191);
}
```
<img width="526" height="345" alt="image" src="https://github.com/user-attachments/assets/d0d14def-350b-4380-99b9-fd045f4bf8ad" />


### **4.3 Tablas Generadas por las Migraciones**
Mediante el comando `php artisan migrate`, Laravel creó automáticamente las tablas necesarias para la autenticación en MySQL:
* `users` (gestión de cuentas de usuarios, correos y contraseñas cifradas)
* `password_reset_tokens` (tokens de recuperación de clave)
* `failed_jobs` / `jobs` / `sessions` (control del sistema)

<img width="920" height="274" alt="image" src="https://github.com/user-attachments/assets/93475b20-4c2e-4f87-851d-ad9398fcf4ca" />

> **Respaldo de Base de Datos:** Se ha generado una copia de seguridad (`backup_practica_laravel.sql`) ubicada en la carpeta raíz del repositorio para garantizar la persistencia de la estructura de tablas.

---

## **5. Evidencias Visuales y Resultados Obtenidos**

### **5.1 Formulario de Inicio de Sesión (`/login`)**
<img width="1188" height="598" alt="Captura de pantalla 2026-10-22 104343" src="https://github.com/user-attachments/assets/e1937ec9-4806-43d2-b9c5-5fb5e6327bc0" />

### **5.2 Formulario de Registro (`/register`)**
<img width="1129" height="477" alt="Captura de pantalla 2026-10-22 104437" src="https://github.com/user-attachments/assets/a2d388d9-0c9e-42bc-8506-a352b7dd6653" />

### **5.3 Panel Principal tras Autenticación (`/home`)**
<img width="1056" height="229" alt="image" src="https://github.com/user-attachments/assets/8016fc1c-d54c-48b4-a6dc-b5eb64f607a7" />

### **5.4 Confirmación en la Base de Datos (phpMyAdmin)**
<img width="1350" height="582" alt="image" src="https://github.com/user-attachments/assets/eb09c730-7eb5-45f6-ae67-c69ffb55aa35" />

---

## **6. Dificultades Encontradas y Soluciones Aplicadas**

Durante la ejecución del laboratorio se presentaron algunos inconvenientes técnicos, los cuales fueron resueltos de la siguiente manera:

* **Dificultad 1: Error de compatibilidad en la longitud de cadenas de la BD (`Syntax error or access violation: 1071 Specified key was too long`)**
  * **Solución:** Se agregó la instrucción `Schema::defaultStringLength(191);` dentro del método `boot()` en `AppServiceProvider.php` antes de ejecutar las migraciones.

* **Dificultad 2: Conflicto de reemplazo del controlador base al ejecutar `php artisan ui bootstrap --auth`**
  * **Solución:** Se confirmó con la opción `yes` en la terminal para permitir que el paquete actualizara los controladores necesarios para gestionar el flujo de autenticación.

* **Dificultad 3: Incompatibilidad al intentar ejecutar procesos simultáneos mediante `composer run dev`**
  * **Solución:** Se modularizaron los servicios en dos pestañas separadas de la terminal en Visual Studio Code: una pestaña ejecutando `php artisan serve` para el backend y otra ejecutando `npm run dev` para la compilación continua del frontend con Vite.

---

## **7. Referencias Bibliográficas**

1. Documentación Oficial de Laravel - Autenticación: [https://laravel.com/docs/11.x/authentication](https://laravel.com/docs/11.x/authentication)
2. Documentación Oficial de Laravel UI: [https://github.com/laravel/ui](https://github.com/laravel/ui)
3. Guía de Laboratorio #2 - Implementación del Login en Laravel, Universidad Tecnológica de Panamá (Ing. Irina Fong).

---

## **8. Fecha de Ejecución del Laboratorio**

**Fecha:** 16 de octubre de 2026

---

<footer>
<hr>
<p align="center">
Este laboratorio ha sido desarrollado por el estudiante de la Universidad Tecnológica de Panamá:<br>
<strong>Nombre:</strong> Andrea Sánchez<br>
<strong>Correo:</strong> andrea.sanchez@utp.ac.pa<br>
<strong>Curso:</strong> Desarrollo Web<br>
<strong>Instructor del Laboratorio:</strong> Irina Fong
</p>
</footer>
