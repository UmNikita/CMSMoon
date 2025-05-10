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
                <p class="inf">Следует провести первоначальную настройку сайта</p>
                <div class="panel-container">
                    <div class="panel-field">
                        <p>Имя сайта</p>
                        <input class="field-name-options" maxlength="50" placeholder="Введите имя сайта">
                    </div>
                    <div class="panel-field">
                        <p>Язык сайта</p>
                        <select class="field-lang-options">
                            <option>Русский</option>
                            <option>English</option>
                        </select>
                    </div>
                    <div class="panel-field">
                        <p>Почта админа</p>
                        <input class="field-mail-options" maxlength="50" placeholder="Введите почту">
                    </div>
                    <div class="panel-field">
                        <p>Имя пользователя</p>
                        <input class="field-login-options" maxlength="50" placeholder="Введите логин админа">
                    </div>
                    <div class="panel-field">
                        <p>Пароль админа</p>
                        <input class="field-psw-options" maxlength="50" type="password" placeholder="Введите пароль админа">
                    </div>
                    <button class="btn-page-two">Сохранить</button>
                </div>
            </div>
        </div>
        @vite(['resources/js/installation_two.js'])
    </body>
</html>