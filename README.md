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

## Virtual Host
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
 
