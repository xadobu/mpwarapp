# MPWAR16App
Basic application MPWAR16App using MPWAR Framework

## Instalación
- Copiar la aplicación base

```
git clone git@github.com:xadobu/mpwarapp.git
```

- Instalar dependencias via composer

```
composer install
```

Tambien se puede usar solo el framwork sin aplicación base añadiendo las siguientes líneas en el fichero ```composer.json```
```
"repositories": [
    {
      "type": "git",
      "url": "https://github.com/xadobu/mpwarfwk.git"
    }
  ],
  "require": {
    "php": "^5.6 || ^7.0",
    "xadobu/mpwarfwk": "dev-master"
  }
```

## Partes
- En la carpeta ```app``` se encuentra un dump de la base de datos asi como los ficheros ```.yml``` de configuración tanto del sistema de routing como de los servicios.
- En la carpeta ```public``` se encuentra el frontController ```index.php```.
- En la carpeta ```src``` se encuentran todos los componentes de nuestra aplicación. 
    - La carpeta ```Controllers``` contiene dos controlladores de ejemplo. 
        - El primero, ```HomeController```, usa los sistemas de templating de twig y smarty indistintamente asi como el PDO de MySQL.
        - El segundo, ```UserController```, usa la response JSON.
- Finalmente, la carpeta ```templates```, contiene las templates ```.twig``` y ```.tpl``` de twig y smarty respectivamente.

## Virtual Host

```
/etc/httpd/conf.d/<site-domain>.conf
```

```
<VirtualHost *:80>
  ServerName myapp.dev

  ## Vhost docroot
  DocumentRoot "/var/www/html/Mpwar16app/public"

  FallbackResource /index.php

  ## Directories, there should at least be a declaration for /var/www/html/Mpwar16app/public

  <Directory "/var/www/html/Mpwar16app/public">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride None
    Require all granted
  </Directory>

  ## Logging
  ErrorLog "/var/log/httpd/myapp.dev_error.log"
  ServerSignature Off
  CustomLog "/var/log/httpd/myapp.dev_access.log" combined

  ## Custom fragment
RewriteEngine On
</VirtualHost>
```

Editar los campos DocumentRoot y Directory con la ruta al proyecto. 