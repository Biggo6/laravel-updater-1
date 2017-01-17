## Laravel 5.1+ Self-Updater
This is a Laravel 5.1+ package which supports self-update of Laravel applications.
You only need a remote webserver which holds the update files.

### Requirements
```
Laravel >= 5.1
PHP >= 5.3
```

### Installation
1. Run
```
composer require 
```
2. Add service provider to **/config/app.php** file.
```php
'providers' => [
    ...
    
],
```
3. Create a **version.json** file in the root directory.
```
{
    "version": "[your initial version]"
}
```
4. Publish config file. (optionally)
```
php artisan 
```

### Usage
This package registers some new routes.

You can check if there is a new application version when you type `self-updater/check`
in your web browser after the base url of your application.

You can automatically update your application with the url ``self-updater/update``.

### Remote version file
The remote version file holds the up to date version of the application. It also defines
where to find the update package.
```
{
    "version": "1.0.1",
    "file": "versions/v101.zip"
}
```

### Configuration
If you published the configuration fiels with the ``vendor:publish`` artisan command, you can
specify your own remote server.
```
'remote_uri' => env('REMOTE_UPDATE_URI', 'http://localhost')
```
You can easily set this parameter in your .env file. The URI should not have a trailing slash
and the **remote_version.json** file on the webserver must be accessible.
