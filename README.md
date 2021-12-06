# Route

### Пример использования
```php
$routes = new Route();
include __DIR__ . '/../' . $routes->run();
```

В index.php создайте экземпляр Вашего класса Route и подключайте возвращённый методом
run() файл.
# Важно
```php
public function __construct()
    {
        $this->routes = include __DIR__ . '/routes.php';
    }
```
В конструктор передайте массив Ваших правил маршрутизации