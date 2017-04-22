Yii 2 Minimized Project Template
================================

Minimized Project Template is a most smaller application template based on a Yii 2 framework.

As a basis  was taken Basic Project Template, but such extensions as gii, debug, bootstrap, 
faker, swiftmailer and codeception testing environment were excluded from it. This was done 
in order to give the developer the opportunity to independently build the application with 
the necessary components and extensions.

This template can be useful to you when the task is to be solved quickly and efficiently, 
but using a basic / advanced template for the solution is costly or inappropriate.


DIRECTORY STRUCTURE
-------------------

      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application and emails
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:^1.3.1"
php composer.phar create-project --prefer-dist --stability=dev m1ke-cerber/yii2-app-mini path/to/your/project
~~~

Now you should be able to access the application through the following URL, assuming your server webroot 
is pointed to project/web directory.

~~~
http://localhost/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.

