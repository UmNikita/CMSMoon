@extends('admin-panel.admin_layout')
@section('page')
@vite(['resources/css/admin_settings.css'])
<div class="container-page">
    <div class="page-title">
        <p>Настройки</p>
    </div>
    <div class="page-fields">
        <div class="page-field-container">
            <p>Название сайта</p>
            <input maxlength="40" placeholder="Название">
        </div>
        <div class="page-field-container">
            <p>Краткое описание</p>
            <textarea maxlength="205" placeholder="Напишите краткое описание сайта..."></textarea>
        </div>
        <div class="page-field-container">
            <p>Ключевые слова</p>
            <input maxlength="40" placeholder="Пишите слова через запятую">
        </div>
        <div class="page-field-container">
            <p>Язык сайта</p>
            <select>
                <option>Русский</option>
                <option>English</option>
            </select>
        </div>
        <div class="page-field-container">
            <p>Иконка сайта</p>
            <button class="page-field-btn-change">Добавить</button>
        </div>
        <div class="page-field-container">
            <p>Активен?</p>
            <input type="checkbox">
        </div>
    </div>
    <div class="page-btn">
        <button>Сохранить изменения</button>
    </div>              
</div>
@endsection