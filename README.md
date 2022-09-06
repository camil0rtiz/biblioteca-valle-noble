# biblioteca-valle-noble

Sistema de apoyo a la administración de los recursos disponibles de una institución.

## Software stack
El proyecto biblioteca-valle-noble es una aplicación web que corre sobre el siguiente software:

- Debian GNU/Linux 10 Buster
- Apache 2.4.38
- PHP 7.3 (ext: mysqli)
- Base de Datos MySQL 8.0.28

## Configuraciones de Ejecución para Entorno de Desarrollo/Produccción

Para clonar el código de la aplicación web es necesario instalar **git**:

`sudo apt-get install git`

Después de haber instalado git, puedes crear una carpeta en la que clonarás el proyecto:

`mkdir /home/tu_usuario/git/`

Recuerda que en "tu_usuario" debes escribir el nombre del usuario que estás utilizando.

Después de haber creado la carpeta del proyecto, se debe situar en la carpeta:

`cd /home/tu_usuario/git`

Ya situado en la carpeta, se debe clonar el repositorio

`git clone https://github.com/camil0rtiz/biblioteca-valle-noble.git`

### Credenciales de Base de Datos y variables de ambiente

Para correr de manera correcta el proyecto, es necesario crear la base de datos en un servidor MySQL local o de su preferencia. Luego de eso, se debe importar el archivo llamado bd.sql` que va incluído en la raíz del proyecto, ya que contiene el esquema y algunos datos insertados a manera de ejemplo

Después de importar la base de datos, se debe editar el archivo `biblioteca-src/includes/db.php` 

```php
<?php
$userdb = ''; // Aquí debe ir el usuario de la base de datos
$passdb = ''; // Aquí debe ir la contraseña de la base de datos
$dbname = ''; // Aquí debe ir el nombre de la base de datos
$host = ''; // Aquí debe el host (servidor) de la base de datos, no necesariamente debe estar en el servidor donde se encuentra la aplicación web
...
```


### Docker, Máquina Virtual, Sistema Operativa
Con una terminal situarse dentro del directorio raiz donde fue clonado este repositorio, por ej: `~/git/biblioteca-valle-noble/`.
Una vez situado en la raiz del proyecto, se debe ejecutar lo siguiente para construir la imagen docker:

```bash
docker build -t biblioteca-valle-noble:version1.0 .

```

Una vez construida la imagen, lanzar un contenedor montando un volumen que contenga el código del repositorio, en el directorio /var/www/html del contenedor.

```bash
docker run --rm -ti -p 80:80 -v /home/usuario/git/biblioteca-valle-noble/biblioteca-src/:/var/www/html biblioteca-valle-noble:version1.0
```


Ir a un navegador web y ejecutar la siguiente url [biblioteca-valle-noble](http://localhost/index.php)

## Construido con

- [PHP](https://php.net/) - Lenguaje utilizado para desarrollar la aplicación web
- JavaScript - Lenguaje de programación
- HTML5
- [Bootstrap 5](https://getbootstrap.com/) - Framework CSS
- [AdminLTE Bootstrap](https://adminlte.io/) - Plantilla de panel de administraci


## Licencia

Este proyecto fue construido con la licencia GPL v3, - ver [LICENSE.md](LICENSE.md) para mayor información


## Contribuir al Proyecto

- Por favor lea las instrucciones para contribuir al proyecto en [CONTRIBUTING.md](CONTRIBUTING.md)
