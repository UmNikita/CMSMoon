@extends('admin-panel.admin_layout')
@section('page')
@vite(['resources/css/admin_page.css'])
<div class="container-page">
    <div class="page-title">
        <p>Страницы</p>
    </div>
    <div class="page-container">
        <button class="page-container-add">Добавить</button>
        <table>
            <tr class="page-head">
                <th class="page-title-col">Заголовок</th>
                <th>Последнее редактирование</th>
                <th>Маршрут</th>
            </tr>
            <tr class="page-body">
                <td class="page-title-col">Главная</td>
                <td>01.01.2000</td>
                <td class="page-rout-col"><a href="/">/</a></td>
                <td class="page-body-btns">
                    <button class="page-body-btns-change"></button>
                    <button class="page-body-btns-del"></button>
                </td>
            </tr>
            <tr class="page-body page-body-border">
                <td class="page-title-col">Главная</td>
                <td>01.01.2000</td>
                <td class="page-rout-col"><a href="/">/</a></td>
                <td class="page-body-btns">
                    <button class="page-body-btns-change"></button>
                    <button class="page-body-btns-del"></button>
                </td>
            </tr>
            <tr class="page-body">
                <td class="page-title-col">Главная</td>
                <td>01.01.2000</td>
                <td class="page-rout-col"><a href="/">/</a></td>
                <td class="page-body-btns">
                    <button class="page-body-btns-change"></button>
                    <button class="page-body-btns-del"></button>
                </td>
            </tr>
            <tr class="page-body page-body-border">
                <td class="page-title-col">Главная</td>
                <td>01.01.2000</td>
                <td class="page-rout-col"><a href="/">/</a></td>
                <td class="page-body-btns">
                    <button class="page-body-btns-change"></button>
                    <button class="page-body-btns-del"></button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection