<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheoryController extends Controller
{
    public function theory()
    {
        // Здесь ты можешь вернуть представление, например, theory.blade.php
        return view('theory');
    }
}
