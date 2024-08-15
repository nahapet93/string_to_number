## Запуск проекта

- Извлеките проект из git-провайдера `git clone https://github.com/nahapet93/string_to_number.git`
- Переименуйте файл `.env.example` в `.env` в корневой папке вашего проекта.
- Откройте консоль и перейдите в корневую папку вашего проекта.
- Запустите `composer install`
- Запустите `npm i`
- Запустите `php artisan key:generate`
- Запустите `php artisan serve`

## Для проверки

- Откройте Postman
- Выберите метод `POST`
- Вставьте в поле URL http://127.0.0.1:8000/api/string-to-number
- Во вкладке `Body` выбирайте `raw` и тип `JSON`
- В поле тела вставьте 


    {
      "input_string": "Hello world"
    }
- Нажмите `Send`
- В поле ответа должен быть текст


    {
      "number": 676
    }
