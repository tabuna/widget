## Widget
Widget package from Laravel 


Виджет (widget) — это экземпляр класса Widget или унаследованного от него.
Это компонент, применяемый, в основном, с целью оформления. 
Виджеты обычно встраиваются в представления для формирования некоторой сложной, но в то же время самостоятельной части пользовательского интерфейса. 

К примеру, виджет календаря может быть использован для рендеринга сложного интерфейса календаря. 
Виджеты позволяют повторно использовать код пользовательского интерфейса.


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



###Создание :
	
Чтобы создать новый виджет, необходимо выполнить
```php
php artisan make:widget NAME
```
В папке `app/Http/Widgets` создаться класс шаблон виджета
Как и у контроллера, у виджета может быть собственное представление.
Рекомендуется распологать файлы виджета в поддиректории views. 

Для регистрации Вашего нового виджета необходимо занести его в `config/widget.php`

```php
'Widgets' => [
                'Test' => App\Widgets\NAME::class
             ],
```
	


## Usage

При вызове виджета поумолчанию исполняется метод "run".
Для подключения виджета необходимо выполнить в коде используя синтаксис Blade:
```php
@widget('Test')
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.