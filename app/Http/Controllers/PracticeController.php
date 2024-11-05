<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function practice()
    {
        // Возвращаем представление для страницы практических заданий
        return view('practice');
    }
}
