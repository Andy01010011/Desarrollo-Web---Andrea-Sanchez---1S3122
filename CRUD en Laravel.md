# Laboratorio - Implementación de Módulo CRUD de Productos en Laravel

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
<img width="853" height="92" alt="image" src="https://github.com/user-attachments/assets/2c38c34e-71c8-47a9-bb23-0dcffecdb144" />


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
<img width="480" height="218" alt="image" src="https://github.com/user-attachments/assets/38cc24cd-bd8c-42d3-8e9f-270776fb3782" />
<img width="461" height="245" alt="image" src="https://github.com/user-attachments/assets/18ce9c4e-137f-4f45-818a-0c1fb42cb3bd" />


*Opción seleccionada en la consola:* `bootstrap`

### 3.3 Actualización de Rutas y Autoload

Se registró la ruta de tipo recurso en `routes/web.php`:

```php
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
```
<img width="732" height="283" alt="image" src="https://github.com/user-attachments/assets/cf4e831a-ad51-439c-b748-2885ef8d556b" />


Regeneración del mapa de clases con Composer:

```bash
composer dump-autoload
```
<img width="472" height="239" alt="image" src="https://github.com/user-attachments/assets/083fb65d-917a-4143-a7bd-64f851af7dba" />

---

## 4. Conceptos Técnicos Implementados (`$fillable` vs. `$guarded`)

- **`$fillable`:** Actúa como una lista blanca de atributos permitidos para la asignación masiva. Evita que usuarios malintencionados modifiquen campos críticos, como roles o identificadores, que no deben aceptarse libremente desde una solicitud.
- **`$guarded`:** Funciona a la inversa, definiendo los campos que están protegidos contra la asignación masiva.

---

## 5. Evidencias Visuales y Resultados Obtenidos

### 5.1 Panel Principal con Enlace a Productos (`/home`)

<img width="1365" height="590" alt="image" src="https://github.com/user-attachments/assets/797626ea-d027-4f52-be76-f870b94c14bb" />

### 5.2 Módulo CRUD - Crear Nuevo Producto (`/products/create`)

<img width="1365" height="597" alt="image" src="https://github.com/user-attachments/assets/25f4a702-810c-424a-b88a-99daffa35971" />

### 5.3 Verificación en la Base de Datos (phpMyAdmin)

<img width="1365" height="591" alt="image" src="https://github.com/user-attachments/assets/9b47da18-47f2-404b-ad63-d8ba0f499ba7" />

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
