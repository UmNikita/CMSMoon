<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPage extends Controller
{
    public function show() {
        return view('admin-panel.admin_page');
    }
}
