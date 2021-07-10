# Aplicación Bases de Datos 2021-1

## Introducción

Este repositorio consta de una aplicación web en lenguaje PHP que gestiona usuarios desde un administrador. El fin de este proyecto es que los y las estudiantes puedan tener un ejemplo cercano del cual basarse para poder completar su Tarea 2 de MySQL y PHP de manera exitosa.

## Sobre la Aplicación

Como se dijo en la introducción, esta aplicación web es un simple administrador de usuarios, donde un administrador registrado (login) es capaz de crear, editar y eliminar usuarios, además de ver la información de cada uno.

**observación:** Se recomienda crear un administrador de forma manual en la base de datos, hasheando previamente la contraseña en PHP.

## Sobre el Proyecto

**importante**: la opción de usuarios no se encuentra implementada.

### Estructura

En las siguientes secciones de este documento se describe la estructura del proyecto.

**observación**: se sugiere seguir una estructura similar.

#### Views

Las views (o vistas) son los archivos `.php` que contienen el código HTML que, finalmente, se muestra en el navegador.

Estos archivos se encuentran en el directorio `src/` del proyecto.

#### Includes

Los includes son los archivos `.php` del directorio `includes/` que son importados desde las vistas y contienen código que se repite en las mismas. En otras palabras, son los archivos encargados de modularizar el código.

#### Database

El directorio `database/` contiene el archivo `connection.php` y en este se realiza la conexión a la base de datos.

#### Controller

El directorio `controller/` contiene archivos `.php` y en ellos se encuentra el código que importa la conexión a la base de datos y realiza las consultas necesarias a ella. Luego, los resultados obtenidos deben ser pasado a las vistas.
