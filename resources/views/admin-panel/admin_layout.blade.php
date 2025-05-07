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
                <a href="{{route('admin.main')}}" class="side-menu-element">
                    <p>Главная</p>
                </a>
                <a href="{{route('admin.settings')}}" class="side-menu-element">
                    <p>Настройки</p>
                </a>
                <a href="{{route('admin.content')}}" class="side-menu-element">
                    <p>Контент</p>
                </a>
                <a href="{{route('admin.media')}}" class="side-menu-element">
                    <p>Медиа</p>
                </a>
                <a href="{{route('admin.pages')}}" class="side-menu-element">
                    <p>Страницы</p>
                </a>
                <a href="{{route('admin.users')}}" class="side-menu-element">
                    <p>Пользователи</p>
                </a>
            </div>
            <div class="page">@yield('page')</div>
        </div>
    </body>
</html>