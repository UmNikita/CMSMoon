<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/admin.css'])
    </head>
    <body>
    <header>
            <p class="header-title">Сайт - Административная панель</p>
            <div class="header-user">
                <p class="header-name">Admin</p>
                <div class="header-avatar"></div>
            </div>
        </header>
        <div class="container">
            <div class="side-menu">
                <div class="side-menu-element">
                    <p>Главная</p>
                </div class="side-menu-element">
                <div class="side-menu-element">
                    <p>Настройки</p>
                </div>
                <div class="side-menu-element">
                    <p>Контент</p>
                </div>
                <div class="side-menu-element">
                    <p>Медиа</p>
                </div>
                <div class="side-menu-element">
                    <p>Страницы</p>
                </div>
                <div class="side-menu-element">
                    <p>Комментарии</p>
                </div>
                <div class="side-menu-element">
                    <p>Пользователи</p>
                </div>
            </div>
            <div class="page">@yield('page')</div>
        </div>
    </body>
</html>