Sistema de apoyo a la administración de los recursos disponibles de una institución

~~Descripción del proyecto..., que resuelve, que hace, a que publico está dirigido, características del sistema, etc~~

## Software stack
El proyecto biblioteca-valle-noble es una aplicación web que corre sobre el siguiente software:

- Debian GNU/Linux 10 Buster
- Apache 2.4.38
- PHP 7.3 (ext: mysqli)
- Base de Datos MySQL 8.0.28

## Configuraciones de Ejecución para Entorno de Desarrollo/Produccción
Para ejecutar la aplicación web es necesario instalar **git**:
###Ubuntu (o distribuciones basadas en Debian)

`sudo apt-get install git`

Después de haber instalado git, procede a cambiar al directorio raíz por defecto del servidor web

### Credenciales de Base de Datos y variables de ambiente
- Editar el archivo `src/env.php`
- **IMPORTANTE**: Por razones de Seguridad **NUNCA** debes guardar las credenciales y subirlas al repositorio


### Docker, Máquina Virtual, Sistema Operativa
Con una terminal situarse dentro del directorio raiz donde fue clonado este repositorio, por ej: `~/git/mi-proyecto/`.
Una vez situado en la raiz del proyecto, dirigirse al directorio `docker` y ejecutar lo siguiente para construir la imagen docker:

```bash
docker build -t mi-proyecto:version1.0 .

```

Una vez construida la imagen, lanzar un contenedor montando un volumen que contenga el código del repositorio, en el directorio /var/www/html del contenedor.

```bash
docker run --rm -ti -p 80:80 -v /home/usuario/git/mi-proyecto/:/var/www/html mi-proyecto:version1.0 bash
```


Iniciar el servicio de Apache Http Server

```bash
service apache2 start
```

Iniciar el servicio de Nginx

```bash
service nginx start
```

Iniciar el servicio de NodeJS

```bash
nodejs index.js
```


### Instalar dependencias del proyecto

Cambiar al directorio web document root (Apache) del contenedor:
```bash
cd /var/www/html
```

Instalar las dependencias del proyecto con composer
```bash
composer install
```

Cambiar permisos para permitir la correcta ejecución de la aplicación en entorno local
```bash
chmod -R 777 web/assets/ logs/ cache/
```

Ir a un navegador web y ejecutar la siguiente url [mi-proyecto](http://localhost/mi-carpeta/index.php)

## Construido con

- ~~[Laravel](https://laravel.com/) - The web framework used~~
- ~~[Symfony](https://symfony.com/) - The web framework used~~
- ~~[Rails](https://rubyonrails.org/) - The web framework used~~
- ~~[Django](https://www.djangoproject.com/) - The web framework used~~
- ~~[Composer](https://getcomposer.org/) - Dependency Management~~
- ~~[Pipenv](https://pipenv.pypa.io/en/latest/) - Dependency Management~~
- ~~[Rubygem](https://rubygems.org/) - Dependency Management~~
- ~~[Bundler](https://bundler.io/) - Dependency Management~~
- ~~[NPM](https://www.npmjs.com/) - Dependency Management~~
- ~~[Yarn](https://yarnpkg.com/) - Dependency Management~~
- ~~[Bootstrap 4](https://getbootstrap.com/) - HTML, CSS, and JS Frontend Framework~~
- ~~[AdminLTE Bootstrap](https://adminlte.io/) - Admin Dashboard Template~~


## Licencia

Este proyecto fue construido con la licencia AAA, - ver [LICENSE.md](LICENSE.md) para mayor información


## Contribuir al Proyecto

- Por favor lea las instrucciones para contribuir al proyecto en [CONTRIBUTING.md](CONTRIBUTING.md)

## Agradecimientos

- Basado en el código de .....
- etc

