<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Войти</title>
        @vite(['resources/css/login.css'])
    </head>
    <body>
        <div class="container">
            <div class="container-panel">
                <p class="title">Добро пожаловать!</p>
                <div class="panel-container">
                    <div class="panel-field">
                        <p>Логин</p>
                        <input class="field-login" placeholder="Логин">
                    </div>
                    <div class="panel-field">
                        <p>Пароль</p>
                        <input class="field-psw" type="password" placeholder="Пароль">
                    </div>
                    <div class="panel-check">
                        <input class="field-remember" type="checkbox">
                        <p>Запомнить меня</p>
                    </div>
                    <button class="field-btn">Далее</button>
                </div>
            </div>
        </div>
        @vite(['resources/js/login.js'])
    </body>
</html>