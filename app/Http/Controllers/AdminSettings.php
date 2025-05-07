<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSettings extends Controller
{
    public function show() {
        return view('admin-panel.admin_settings');
    }
}
