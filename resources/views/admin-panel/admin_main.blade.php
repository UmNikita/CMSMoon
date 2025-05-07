@extends('admin-panel.admin_layout')
@section('page')
@vite(['resources/css/admin_main.css'])
<div class="container-page">
    <div class="page-title">
        <p>Сайт</p>
    </div>
    <div class="page-statistics">
        <div class="page-statistics-element page-statistics-element-pages">
            <p class="page-statistics-element-number">0</p>
            <p class="page-statistics-element-txt">Страниц</p>
        </div>
        <div class="page-statistics-element page-statistics-element-users">
            <p class="page-statistics-element-number">0</p>
            <p class="page-statistics-element-txt">Пользователей</p>
        </div>
        <div class="page-statistics-element page-statistics-element-attendance">
            <p class="page-statistics-element-number">0</p>
            <p class="page-statistics-element-txt">Посещаемость</p>
        </div>
        <div class="page-statistics-element page-statistics-element-productivity">
            <p class="page-statistics-element-number">100</p>
            <p class="page-statistics-element-txt">Оценка производительности</p>
        </div>
    </div>
    <div class="page-bar">
        <div class="page-todo">
            <div class="page-todo-title-conteiner">
                <p class="page-todo-title">TODO</p>
                <button class="page-todo-title-btn">+</button>
            </div>
            <table class="page-todo-container">
                <tr class="page-todo-head">
                    <th class="page-todo-title-col">Заголовок</th>
                    <th class="page-todo-date-col">Дата</th>
                </tr>
                <tr class="page-todo-el">
                    <td class="page-todo-title-col">Имя</td>
                    <td class="page-todo-date-col">01.01.2000</td>
                    <td class="page-todo-del-col"><button></button></td>
                </tr>
            </table>
        </div>
        <div class="page-information">
            <p class="page-information-title">О системе</p>
            <p class="page-information-subtitle">Проект работает на основе "CMS Moon v alpha"</p>
            <p class="page-information-subtitle">Последнее обновление: 21.03.2021 14:32</p>
            <p class="page-information-subtitle">Наименование: Сайт</p>
            <p class="page-information-subtitle">Описание: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p class="page-information-subtitle">Ключевые слова: слово 1, слово 2, слово 3, слово 4, слово 5</p>
        </div>
    </div>                  
</div>
@endsection