# Warning this repository is no longer supported

### If you are looking for a good way to use widgets on laravel please see how to use [directive](https://laravel.com/docs/blade#extending-blade). This provides a better experience than package.

----




# Orchid Widget

Widgets embedded in the representation to form a complex, but at the same time independent of the user interface.

## Installation

install wia composer

```php
composer require orchid/widget
```
publish package

```php
php artisan vendor:publish
```

### Create :
	
To create a new widget, you need to
```php
php artisan orchid:widget NameClassWidget
```

In the folder `app/Http/Widgets` create a class widget template
Like a controller, a widget can also have its own view.
Recommended siting widget files in a subdirectory views.

To register your new widget, you must bring it to the `config/widget.php`

```php
//
'widgets' => [
    'test' => App\Widgets\NameClassWidget::class
],
```
	
## Usage

"Run" method is executed when the call widget defaul.
you must perform in the code to connect the widget using Blade syntax:
```php
@widget('test')
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
