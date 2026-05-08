# CRUD Ciclos Formativos 

Proyecto de Aplicación web en Laravel con MySQL para la gestión de ciclos formativos del IES San Vicente Ferrer (Algemesí).

---
# Entorno

Este proyecto se ha desarrollado en una máquina virtual reutilizada con las siguientes características:

Sistema Operativo: ubuntu-22.04.2-desktop-amd64
RAM: 4GB
CPU's: 4
Disco duro: 50 GB

---

# Tecnologías utilizadas

Laravel 12
PHP 8
MySQL
Docker
Bootstrap 5
Blade
Git y GitHub

---

# Funcionalidades

## CRUD completo de ciclos formativos

Esta applicación permite:

Crear ciclos nuevos.
Editar ciclos ya creados.
Eliminar ciclos.
Visualizar el listado de ciclos.

## Búsqueda y filtrado

Esta aplicación puede:
Buscar por nombre.
Filtrar por grado.

## Paginación

El listado utiliza Laravel Pagination para la paginación.

## Validaciones

Se han implementado validaciones mediante:
StoreCicloFormativoRequest
UpdateCicloFormativoRequest

## Seeders

Se incluye un seeder con datos de prueba para facilitar el desarrollo y las pruebas iniciales.

---
# Diseño de la Base de Datos

Para cumplir con las especificaciones del proyecto indicado en el punto 3, se ha diseñado un modelo relacional que asegura la integración de los datos y la escalabilidad.

## Diagrama Entidad-Relacion

Puedes encontrar el archivo del diagrama en la carpeta 
'docs/Diagrama_Proyecto_Rebeca_Gijon.drawio.png'.

![Diagrama de Base de Datos](./docs/Diagrama_Proyecto_Rebeca_Gijon.drawio.png)

Se ha creado la tabla 'ciclos_formativos' siguiendo las especificaciones del proyecto.

También se han incluido 'timestamps' ('created_at', 'updated_at') para el seguimiento de cambios mediante Eloquent ORM.

La tabla está preparada para recibir la relación '1:N' con las programaciones didácticas del Módulo C.

---
# Documentación aportada

Se ha creado una carpeta en laravel/programaciones-didacticas/docs, que contiene la siguiente documentación:

[Anteproyecto](./docs/Presentacion_anteproyecto.pdf)
[Guía de usuario CRUD Ciclos Formativos](./docs/Guia_usuario_CRUD_Ciclos_Formativos.pdf)
![Diagrama de Base de Datos](./docs/Diagrama_Proyecto_Rebeca_Gijon.drawio.png)



---

# Instalación del proyecto

## 1. Clonar repositorio

```bash
git clone https://github.com/rgijon/programaciones-didacticas.git
```

## 2. Entrar al proyecto

```bash
cd programaciones-didacticas
```

## 3. Ejecutar Docker

```bash
docker compose up -d
```

## 4. Entrar en el contenedor

En un terminal nuevo, ejecutar:
```bash
docker exec -it laravel-myapp-1 bash
```

## 5. Ejecutar migraciones y seeder

```bash
php artisan migrate:fresh --seed
```

# Rutas y controladores principales

La aplicación utiliza un controlador Resource de Laravel llamado:

## CicloFormativoController

Este controlador se encarga de gestionar todas las operaciones relacionadas con los ciclos formativos.

Las principales funciones son las sigueintes:

|  Ruta            |  Método   | Función  | Descripción                                  |
|------------------|-----------|----------|----------------------------------------------|
|/ciclos           | GET       | index()  | Mostrar listado de ciclos                    |
|/ciclos/create    | GET       | create() | Mostrar formulario de creación de nuevo ciclo|
|/ciclos           | POST      | store()  | Guardar nuevo ciclo                          |
|/ciclos/{id}/edit | GET       | edit()   | Mostrar formulario de edición                |
|/ciclos/{id}      | PUT/PATCH | update() | Actualizar ciclo                             |
|/ciclos/{id}      | DELETE    | destroy()| Eliminar ciclo                               |

En el método index() también se ha implementado la paginación, la búsqueda por nombre, y el filtrado por grado.

# Estructura del proyecto

app/Models             -> Modelos Eloquent
app/Http/Controllers   -> Controladores
resources/views        -> Vistas Blade
database/migrations    -> Migraciones
database/seeders       -> Seeders
routes/web.php         -> Rutas web
docs                   -> Documentación

# Modelo

CicloFormativo

# Views

template.blade.php
index.blade.php
create.blade.php
edit.blade.php

# Requests

Se han utilizado Form Reuests para validar los datos enviados desde los siguientes formularios:

StoreCicloFormativoRequest
UpdateCicloFormativoRequest

# Autor

Proyecto desarrollado por Rebeca Gijón Ayala.



