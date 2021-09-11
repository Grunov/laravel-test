# laravel-test

## Установка
### Клонируем репозиторий:   
```
git clone https://github.com/Grunov/laravel-test.git
```

### Устанавливаем зависимости:
```
composer install
```

## Настройка

1. Переимновываем файл .env.example в .env
2. Генерируем ключ:
```
php artisan key:generate
```
3. Создаем storage link:
```
php artisan storage:link
```
4. В файле .env настраиваем подключение к бд:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
