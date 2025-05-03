<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Render extends Controller
{
    public function show() {
        return view('welcome');
    }
}
