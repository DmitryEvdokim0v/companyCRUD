# companyCRUD
Скачать или клонировать репозиторий открыть проект в редакторе.
1) В терминале прописать cd companyCRUD
2) composer install
3) Файл .env.exemple нужно переименовать в .env
4) В файле .env нужно прописать:
    DB_HOST=db
    DB_DATABASE=CompanyCRUD
    DB_PASSWORD=notSecureChangeMe
5)  docker-compose up --build
6) При активированном контейнере в консоли: docker-compose exec web bash
7) внутри контейнера php artisan key:generate
8) В браузере в адресной строке ввести localhost:6080
    Пользователь: root
    Пароль: notSecureChangeMe
    Создать БД CompanyCRUD
9) В консоли(В контейнере) php artisan migrate
10) В браузере http://localhost:8080/public/
    Логин: admin@admin.com
    Пароль: admin
В данном проекте реализована возможность записывать, изменять, просматривать и удалять компании и товары в компаниях.
Предусмотрена форма авторизации, а также создания нового пользователя(http://localhost:8080/public/registration)