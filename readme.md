<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About MyPal

MyPal is a demo web application for user to list rescued pet for sale.

User can view all listing of pets without registration and to add/list a pet, registration is required.

## Using MyPal in PC

1) Install and run XAMPP
2) Download entire root and setup .env file according to database created
3) With Administration mode on notepad edit C:\Windows\System32\drivers\etc and add 127.0.0.1 xxx.yy then save it.
4) Edit C:\xampp\apache\conf\extra\httpd-vhosts.conf
        <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs"
        ServerName localhost
        </VirtualHost>

        <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/xxx/public"
        ServerName xx.yy
        </VirtualHost>
5)Restart apache and view on browser

## Using on Cpanel

1) SQL dump available at _SQL/mypal.sql
2) Move mypal/* except public folder to your root path and move the mypal/public/* contents to your public folder.
3) Modify mypal/public/index.php to the correct bootstrap path

    require __DIR__.'/../bootstrap/autoload.php';

    $app = require_once __DIR__.'/../bootstrap/app.php';


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
