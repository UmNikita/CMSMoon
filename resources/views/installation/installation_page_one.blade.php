<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        @vite(['resources/css/installation.css'])
    </head>
    <body>
    <div class="container">
            <div class="container-panel">
                <p class="title">Добро пожаловать!</p>
                <p class="subtitle">Настройте подключение к базе данных</p>
                <div class="panel-container">
                    <div class="panel-field">
                        <p>Имя базы данных</p>
                        <input class="field-name-db" maxlength="50" placeholder="root">
                    </div>
                    <div class="panel-field">
                        <p>Имя пользователя</p>
                        <input class="field-user-db" maxlength="50" placeholder="username">
                    </div>
                    <div class="panel-field">
                        <p>Пароль</p>
                        <input class="field-psw-db" maxlength="50" placeholder="password">
                    </div>
                    <div class="panel-field">
                        <p>Сервер базы данных</p>
                        <input class="field-server-db" maxlength="50" placeholder="localhost">
                    </div>
                    <button class="btn-page-one">Далее</button>
                </div>
            </div>
        </div>
        @vite(['resources/js/installation.js'])
    </body>
</html>