# BACKEND-EDC-PHP
Backend Repository Task Manager - EDC

### Datos generales

**- Autor del proyecto:** Alejandro López Bellés

**- Título del proyecto:** TASK PLANNER

**- Fecha:** 07/08/2023

- Tecnologías y dependencias: 

![tecnologias-backend-php](https://github.com/alopezbelles/backend-edc/assets/113507322/d29e6dde-757e-4392-8d11-6fd7f1979d2b)

### Descripción general del proyecto 

El proyecto se enfoca en el diseño y desarrollo de una base de datos y una API para la gestión de una plataforma de gestión de tareas. El proyecto está desarrollado utilizando el lenguaje PHP con el framework LARAVEL con ARTISAN como gestión de líneas de comandos, y se gestiona con MySQL. También se ha utilizado Composer como herramienta de gestión de dependencias. 

### Pasos para arrancar el proyecto en entorno local
- Clonar el proyecto en el entorno local con php instalado en el sistema local.
- Tener Composer instalado en el sistema local. 
- Asegurarse de tener un servidor MySQL configurado en el entorno local.
- Clonar el repositorio con el comando git clone <URL_DEL_REPOSITORIO>.
- Instalar las dependencias ejecutando el comando "composer install". Esto instalará las dependencias mencionadas en el archivo composer.json.
- Configurar el archivo .env. Crear un archivo .env. Se facilitará por privado las credenciales para la ejecución de la base de datos. Copiar todo el contenido del archivo .txt adjunto y pegarlo en el archivo creado .env.
- Para gestionar la base de datos, crear la base de datos en MySQL o cualquier otro motor de base de datos compatible. Utilizar las credenciales del archivo .env.
- Ejecutar el comando "php artisan migrate" para ejecutar las migraciones y crear las tablas en la base de datos.
- Ejecutar el comando "php artisan db:seed" para migrar los seeders de la entidad Task. Esto añadirá los registros a la base de datos para tener una vista previa del funcionamiento inicial de la aplicación en el frontend.
- Iniciar el servidor de desarrollo, una vez configurados los pasos anteriores, con el comando "php artisan serve".

### Tablas
La base de datos consta de una única tabla llamada "Task". Esta entidad tiene los siguientes atributos: "id", "title", "description", "status", "description" "createdAt" y "updatedAt".

### Endpoints
Para poder ejetutar los endpoints se ejecuta la raiz:
## ** [http://localhost:3656] 
Sustituir el puerto por el puerto que tengamos en entonrno local. 

A continuación de esta ruta, se añaden los endpoints con las peticiones GET, POST, PUT y DELETE en el postman o algún servicio similar. 

- GET /alltasks --> Mostrará el listado con todas las tareas.
- POST /createtask --> Añadirá una nueva tarea a la lista. En la petición de postman (o una herramienta similar) introducir en el body en formato json: {"title": "nuevo título", "description": "nueva descripción".
- Put /edittask/{id} --> Editará una tarea de la base de datos (siendo {id} la id del registro a eliminar). En la petición introducir en el body en formato json {"title": "nuevo titulo", "status":"nuevo status", "description": "nueva descripción".
- Delete /deletetask/{id} --> Eliminará una tarea de la base de datos (siendo {id} la id del registro a eliminar). En este caso la id se introduce por parámetro en la ruta. 


