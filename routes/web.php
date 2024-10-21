<?php

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
    // dati generati casualmente da chatgpt
     $users = [
        ['name' => 'Mario Rossi', 'email' => 'mario.rossi@example.com'],
        ['name' => 'Luca Bianchi', 'email' => 'luca.bianchi@example.com'],
        ['name' => 'Giulia Verdi', 'email' => 'giulia.verdi@example.com'],
        ['name' => 'Francesca Neri', 'email' => 'francesca.neri@example.com'],
        ['name' => 'Paolo Gialli', 'email' => 'paolo.gialli@example.com']
    ];

    return view('home', compact('users'));
});