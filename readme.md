## Widget

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/99c83653-e06f-459e-9433-0103de1f58b3/big.png)](https://insight.sensiolabs.com/projects/99c83653-e06f-459e-9433-0103de1f58b3)


Widget package from Laravel 


Widget (widget) - an instance of Widget, or inherited from him. This component is used mainly for the purpose of registration. Widgets are usually embedded in the representation to form a complex, but at the same time independent of the user interface.

For example, a calendar widget can be used to render complex calendar interface. Widgets allow you to reuse the user interface code.


## Installation

1. install package

	```php
    composer require orchid/widget
	```

1. edit config/app.php

	service provider :

	```php
	 Orchid\Widget\WidgetServiceProvider::class
	```

1. create user\roles table

	```php
	php artisan vendor:publish
	```



###Create :
	
To create a new widget, you need to
```php
php artisan make:widget NAME
```
In the folder `app / Http / Widgets` create a class widget template
Like a controller, a widget can also have its own view.
Recommended siting widget files in a subdirectory views.

To register your new widget, you must bring it to the `config / widget.php`

```php
'Widgets' => [
                'Test' => App\Widgets\NAME::class
             ],
```
	


## Usage

"Run" method is executed when the call widget defaul.
you must perform in the code to connect the widget using Blade syntax:
```php
@widget('Test')
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
