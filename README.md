# 🏴‍☠️ Grand Line API: The Devil Fruit Registry

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Sanctum](https://img.shields.io/badge/Auth-Sanctum-purple?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)

> *"El poder de las Frutas del Diablo es inmenso, pero esta API lo controla todo."*

Una **API RESTful** robusta construida con **Laravel 12**, diseñada para gestionar una enciclopedia de **Frutas del Diablo (Akuma no Mi)**. Este proyecto implementa autenticación segura mediante tokens (**Laravel Sanctum**) para proteger la base de datos de piratas no autorizados.

---

## ⚡ Características Principales

* 🔐 **Autenticación Segura:** Sistema completo de Registro y Login vía Tokens.
* 🍎 **Gestión de Recursos:** CRUD para el modelo `DevilFruit`.
* 🛡️ **Seguridad:** Rutas protegidas donde solo usuarios autenticados pueden añadir registros.
* 📡 **API Standard:** Respuestas en formato JSON listas para consumir por cualquier cliente (Postman, React, Vue, etc).

---

## 🗂️ Modelo de Datos (Devil Fruit)

Cada fruta registrada en el sistema cuenta con los siguientes atributos detallados:

| Campo | Tipo | Descripción | Ejemplo |
| :--- | :--- | :--- | :--- |
| `id` | BigInt | Identificador único | `1` |
| `name` | String | Nombre de la fruta | `Gomu Gomu no Mi` |
| `japanese_name` | String | Nombre original | `ゴムゴムの実` |
| `type` | String | Tipo (Paramecia, Zoan, Logia) | `Paramecia` |
| `description` | Text | Descripción de habilidades | `Cuerpo de goma...` |
| `strength_level` | Integer | Nivel de poder (0-100) | `90` |
| `is_awakened` | Boolean | ¿Ha despertado su poder? | `true` |

---

## 🚀 Instalación y Despliegue

Sigue estos pasos para levantar el proyecto en tu entorno local (XAMPP/Docker/Local):

### 1. Clonar el repositorio
```bash
git clone https://github.com/Ismael54369/laravel_sanctum_api
cd laravel_sanctum_api
```
### 2. Instalar dependencias
```bash
composer install
```
### 3. Configuración de Entorno
Crea tu archivo de configuración `.env` y genera la clave de cifrado.
```bash
cp .env.example .env
php artisan key:generate
```
> **Nota:** Abre el archivo `.env` y configura tu base de datos (DB_DATABASE, DB_USERNAME, etc.).
### 4. Migraciones
Ejecuta las migraciones para crear las tablas en la base de datos.
```bash
php artisan migrate
```
### 5. Iniciar Servidor
```bash
php artisan serve
```
La API estará disponible en: `http://127.0.0.1:8000`

---

## 🛠️ Guía de Pruebas (Postman)

Para interactuar con la API, sigue este flujo de trabajo:

### 🔐 Paso 1: Registro (Obtener Token)

Para poder escribir datos, necesitas identificarte.
-   **Método:** `POST`
-   **URL:** `/api/register`
-   **Headers:** `Accept: application/json`
-   **Body (JSON):**

    ```json
    {
        "name": "Captain",
        "email": "captain@sunny.com",
        "password": "password123",
        "password_confirmation": "password123"
    }

    ```

-   **Respuesta:** Recibirás un `token`. **Cópialo**.

### 🍎 Paso 2: Crear Fruta (Ruta Protegida)

-   **Método:** `POST`

-   **URL:** `/api/fruits`

-   **Auth:** Pestaña `Authorization` -> Tipo `Bearer Token` -> Pega tu token.

-   **Body (JSON):**


    ```json
    {
        "name": "Ope Ope no Mi",
        "japanese_name": "オペオペの実",
        "type": "Paramecia",
        "description": "Permite crear una sala de operaciones esférica y manipular todo dentro.",
        "strength_level": 95,
        "is_awakened": true
    }

    ```

### 📜 Paso 3: Listar Frutas

-   **Método:** `GET`

-   **URL:** `/api/fruits`

-   **Respuesta:** Array JSON con todas las frutas registradas.

--- 

## 📄 Licencia del Rey de los Piratas
Este proyecto es libre como un pirata en el mar. Puedes usarlo, modificarlo y compartirlo bajo los términos del Código Pirata (MIT License). ¡Úsalo para el bien y encuentra el One Piece!

---

<p align="center"> Desarrollado con <strong>Haki de Armadura</strong> rumbo al <strong>Nuevo Mundo</strong> 🏴‍☠️ </p>
