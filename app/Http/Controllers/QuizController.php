<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quizzes()
    {
        // Возвращаем представление, например, quizzes.blade.php
        return view('quizzes');
    }
}
