<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Render;
use App\Http\Controllers\AdminMain;
use App\Http\Controllers\AdminSettings;
use App\Http\Controllers\AdminContent;
use App\Http\Controllers\AdminMedia;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\AdminUser;

Route::get('/', [Render::class, 'show']);

Route::redirect('/moon-admin', '/moon-admin/main');
Route::redirect('/{path}/moon-admin', '/{path}/moon-admin/main')->where('path', '.*');

Route::get('/moon-admin/main', [AdminMain::class, 'show'])->name('admin.main');
Route::get('/{path}/moon-admin/main', [AdminMain::class, 'show'])->where('path', '.*');

Route::get('/moon-admin/settings', [AdminSettings::class, 'show'])->name('admin.settings');
Route::get('/{path}/moon-admin/settings', [AdminSettings::class, 'show'])->where('path', '.*');

Route::get('/moon-admin/content', [AdminContent::class, 'show'])->name('admin.content');
Route::get('/{path}/moon-admin/content', [AdminContent::class, 'show'])->where('path', '.*');

Route::get('/moon-admin/media', [AdminMedia::class, 'show'])->name('admin.media');
Route::get('/{path}/moon-admin/media', [AdminMedia::class, 'show'])->where('path', '.*');

Route::get('/moon-admin/pages', [AdminPage::class, 'show'])->name('admin.pages');
Route::get('/{path}/moon-admin/pages', [AdminPage::class, 'show'])->where('path', '.*');

Route::get('/moon-admin/users', [AdminUser::class, 'show'])->name('admin.users');
Route::get('/{path}/moon-admin/users', [AdminUser::class, 'show'])->where('path', '.*');

// Route::get('/moon-export', [AdminMain::class, 'show']);
// Route::get('/{path}/moon-export', [AdminMain::class, 'show'])->where('path', '.*');
// Route::get('/moon-installation', [AdminMain::class, 'show']);
// Route::get('/{path}/moon-installation', [AdminMain::class, 'show'])->where('path', '.*');