<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    // Route to display a list of to-do itens
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

    // Route to display the create form
    Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

    // Route to store a new to-do item
    Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

    // Route to display a specific to-do item to show
    Route::get('todos/{todo}', [TodoController::class, 'show'])->name('todos.show');

    // Route to display a specific to-do to editing
    Route::get('todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

    // Route to update a specific to-do item
    Route::put('todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

    // Route to delete a specific to-do item
    Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

});

require __DIR__.'/auth.php';
