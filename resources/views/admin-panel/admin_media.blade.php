@extends('admin-panel.admin_layout')
@section('page')
@vite(['resources/css/admin_media.css'])
<div class="container-page">
    <div class="page-title">
        <p>Медиа</p>
    </div>
    <div class="page-container">
        <div class="page-catalog">
            <div class="page-catalog-container">
                <div class="page-catalog-el">
                    <div class="page-catalog-el-img"></div>
                    <div class="page-catalog-el-txt"><p>Текст</p></div>
                </div>
            </div>
        </div>
        <div class="page-description">
            <p class="page-description-title">картинка.png</p>
            <div class="page-description-subt">
                <div class="page-description-row">
                    <p class="page-description-row-l">Папка</p>
                    <p class="page-description-row-r">/</p>
                </div>
                <div class="page-description-row">
                    <p class="page-description-row-l">Тип</p>
                    <p class="page-description-row-r">фото</p>
                </div>
                <div class="page-description-row">
                    <p class="page-description-row-l">Дата</p>
                    <p class="page-description-row-r">01.01.2000</p>
                </div>
                <div class="page-description-row">
                    <p class="page-description-row-l">Вес</p>
                    <p class="page-description-row-r">10Мб</p>
                </div>
                <div class="page-description-row">
                    <p class="page-description-row-l">Расширение</p>
                    <p class="page-description-row-r">png</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection