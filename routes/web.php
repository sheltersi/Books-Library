<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use function PHPUnit\Framework\once;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('/', BooksController::class)
//     ->only(['create', 'store'])
//     ->middleware('auth');

Route::get('books/create',[BooksController::class,'create'])->name('books.create')
->middleware('auth');
Route::post('books/create',[BooksController::class,'store'])->name('books.store')
->middleware('auth');

Route::get('books',[BooksController::class,'index'])->name('books.listing')
->middleware('auth');


require __DIR__.'/auth.php';


