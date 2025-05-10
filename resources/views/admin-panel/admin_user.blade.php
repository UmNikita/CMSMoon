@extends('admin-panel.admin_layout')
@section('page')
@vite(['resources/css/admin_user.css'])
<div class="container-page">
    <div class="page-title">
        <p>Пользователи</p>
    </div>
    <div class="page-container">
        <button class="page-container-add">Добавить</button>
        <table>
            <tr class="page-head">
                <th class="page-title-col">Имя пользователя</th>
                <th>Email</th>
                <th>Роль</th>
            </tr>
            <tr class="page-body">
                <td class="page-title-col">Никита</td>
                <td class="page-rout-col"><a href="mailto:a@mail.ru">a@mail.ru</a></td>
                <td>Администратор</td>
            </tr>
            <tr class="page-body page-body-border">
                <td class="page-title-col">Никита</td>
                <td class="page-rout-col"><a href="mailto:a@mail.ru">a@mail.ru</a></td>
                <td>Администратор</td>
            </tr>
            <tr class="page-body">
                <td class="page-title-col">Никита</td>
                <td class="page-rout-col"><a href="mailto:a@mail.ru">a@mail.ru</a></td>
                <td>Администратор</td>
            </tr>
            <tr class="page-body page-body-border">
                <td class="page-title-col">Никита</td>
                <td class="page-rout-col"><a href="mailto:a@mail.ru">a@mail.ru</a></td>
                <td>Администратор</td>
            </tr>
        </table>
    </div>
</div>
@endsection