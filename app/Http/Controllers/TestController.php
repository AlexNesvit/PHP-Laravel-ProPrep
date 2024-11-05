<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function tests()
    {
        // Возвращаем представление, например, tests.blade.php
        return view('tests');
    }
}
