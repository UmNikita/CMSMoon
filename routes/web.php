<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Render;
use App\Http\Controllers\AdminMain;
use App\Http\Controllers\AdminSettings;
use App\Http\Controllers\AdminContent;
use App\Http\Controllers\AdminMedia;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\AdminUser;
use App\Http\Controllers\Installation;
use App\Http\Controllers\Login;

Route::get('/', [Render::class, 'show']);

Route::redirect('/moon-admin', '/moon-admin/main')->middleware('auth');
Route::redirect('/{path}/moon-admin', '/{path}/moon-admin/main')->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/main', [AdminMain::class, 'show'])->name('admin.main')->middleware('auth');
Route::get('/{path}/moon-admin/main', [AdminMain::class, 'show'])->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/settings', [AdminSettings::class, 'show'])->name('admin.settings')->middleware('auth');
Route::get('/{path}/moon-admin/settings', [AdminSettings::class, 'show'])->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/content', [AdminContent::class, 'show'])->name('admin.content')->middleware('auth');
Route::get('/{path}/moon-admin/content', [AdminContent::class, 'show'])->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/media', [AdminMedia::class, 'show'])->name('admin.media')->middleware('auth');
Route::get('/{path}/moon-admin/media', [AdminMedia::class, 'show'])->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/pages', [AdminPage::class, 'show'])->name('admin.pages')->middleware('auth');
Route::get('/{path}/moon-admin/pages', [AdminPage::class, 'show'])->where('path', '.*')->middleware('auth');

Route::get('/moon-admin/users', [AdminUser::class, 'show'])->name('admin.users')->middleware('auth');
Route::get('/{path}/moon-admin/users', [AdminUser::class, 'show'])->where('path', '.*')->middleware('auth');

// Route::get('/moon-export', [AdminMain::class, 'show']);
// Route::get('/{path}/moon-export', [AdminMain::class, 'show'])->where('path', '.*');

Route::get('/moon-installation', [Installation::class, 'show']);
Route::post('/moon-installation/database', [Installation::class, 'set_database']);
Route::post('/moon-installation/options', [Installation::class, 'set_options']);

Route::get('/moon-login', [Login::class, 'show'])->middleware('guest')->name('login');
Route::post('/moon-login', [Login::class, 'login']);