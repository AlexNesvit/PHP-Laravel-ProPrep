<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PracticeController;
/* Pour lancer
Route::get('/', function () {
    return view('welcome');
});   */

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

// Page d'accueil
//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/theory', [TheoryController::class, 'theory'])->name('theory');

Route::get('/quizzes', [QuizController::class, 'quizzes'])->name('quizzes');

Route::get('/tests', [TestController::class, 'tests'])->name('tests');


Route::get('/practice', [PracticeController::class, 'practice'])->name('practice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
