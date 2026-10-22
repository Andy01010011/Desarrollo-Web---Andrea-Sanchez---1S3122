# Laboratorio #2 - Implementación de Módulo CRUD de Productos en Laravel

**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Facultad:** Facultad de Ingeniería en Sistemas Computacionales (FISC)  
**Carrera:** Licenciatura en Ciberseguridad  
**Asignatura:** Desarrollo Web  
**Instructor:** Ing. Irina Fong  
**Estudiante:** Andrea Sánchez  

---

## 1. Descripción del Proyecto

El propósito de este laboratorio es implementar una arquitectura completa **CRUD (Create, Read, Update, Delete)** utilizando el ORM Eloquent de **Laravel** y la maquetación visual de **Bootstrap**. La práctica incluye la definición de migraciones, la protección de atributos mediante asignación masiva, el uso de paquetes generadores para scaffolds automáticos y la persistencia de datos en el motor MySQL.

---

## 2. Requisitos Previos e Infraestructura

- **Sistema Operativo:** Windows 10 / 11
- **Entorno Web Local:** XAMPP (Apache 2.4 y MySQL Server)
- **Entorno Backend:** PHP v8.x
- **Gestor de Dependencias de PHP:** Composer
- **Compilador Frontend:** Node.js, npm y Vite
- **Editor de Código:** Visual Studio Code

---

## 3. Flujo de Comandos Ejecutados

### 3.1 Creación de Modelo, Migración y Atributos Protegidos

Se generó el modelo `Product` junto a su archivo de migración:

```bash
php artisan make:model Product -m
```

Estructura de la tabla `products` en la migración:

```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('description');
    $table->double('price', 8, 2);
    $table->integer('stock');
    $table->timestamps();
});
```

Protección de asignación masiva en `app/Models/Product.php`:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'price', 'stock'];
}
```

### 3.2 Instalación del Paquete CRUD Generator

Para la aceleración de maquetación y controladores se utilizó el paquete `ibex/crud-generator`:

```bash
composer require ibex/crud-generator --dev
php artisan vendor:publish --tag=crud
php artisan make:crud products
```

*Opción seleccionada en la consola:* `bootstrap`

### 3.3 Actualización de Rutas y Autoload

Se registró la ruta de tipo recurso en `routes/web.php`:

```php
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
```

Regeneración del mapa de clases con Composer:

```bash
composer dump-autoload
```

---

## 4. Conceptos Técnicos Implementados (`$fillable` vs. `$guarded`)

- **`$fillable`:** Actúa como una lista blanca de atributos permitidos para la asignación masiva. Evita que usuarios malintencionados modifiquen campos críticos, como roles o identificadores, que no deben aceptarse libremente desde una solicitud.
- **`$guarded`:** Funciona a la inversa, definiendo los campos que están protegidos contra la asignación masiva.

---

## 5. Evidencias Visuales y Resultados Obtenidos

Agrega las capturas de pantalla correspondientes debajo de cada apartado para documentar el funcionamiento del laboratorio.

### 5.1 Formulario de Inicio de Sesión (`/login`)

<!-- Inserta aquí la captura de pantalla del formulario de inicio de sesión. -->

### 5.2 Panel Principal con Enlace a Productos (`/home`)

<!-- Inserta aquí la captura de pantalla del panel principal. -->

### 5.3 Módulo CRUD - Listado de Productos (`/products`)

<!-- Inserta aquí la captura de pantalla del listado de productos. -->

### 5.4 Módulo CRUD - Crear Nuevo Producto (`/products/create`)

<!-- Inserta aquí la captura de pantalla del formulario para crear productos. -->

### 5.5 Verificación en la Base de Datos (phpMyAdmin)

<!-- Inserta aquí la captura de pantalla de la tabla products en phpMyAdmin. -->

---

## 6. Dificultades Encontradas y Soluciones Aplicadas

- **Dificultad 1: Error de selección de stack al ejecutar `php artisan make:crud products`**
  - **Solución:** Se especificó manualmente la opción `bootstrap` en la interfaz interactiva de la terminal para mantener coherencia con los estilos solicitados en la materia.

- **Dificultad 2: Error `Class ProductController does not exist` al ingresar a la ruta `/products`**
  - **Solución:** Se ejecutó el comando `composer dump-autoload` para refrescar el mapa de clases en Composer y se importó el controlador dentro de `routes/web.php`.

- **Dificultad 3: Configuración predeterminada de SQLite en versiones recientes de Laravel**
  - **Solución:** Se modificó el archivo `.env` cambiando `DB_CONNECTION=mysql`, configurando la base de datos `practica_laravel` y limpiando la caché con `php artisan config:clear`.

---

## 7. Referencias Bibliográficas

1. Documentación oficial de Laravel - Eloquent ORM: [https://laravel.com/docs/11.x/eloquent](https://laravel.com/docs/11.x/eloquent)
2. Paquete Ibex CRUD Generator: [https://github.com/ibex/crud-generator](https://github.com/ibex/crud-generator)
3. Guía de laboratorio de CRUD con Laravel, Universidad Tecnológica de Panamá (Ing. Irina Fong).

---

## 8. Fecha de Ejecución del Laboratorio

**Fecha:** 22 de octubre de 2026
