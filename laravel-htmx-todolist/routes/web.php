<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
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

    return view('layouts.master');
});

Route::get('/Api-Post-Data', function () {
    $client = new Client();
    $api_url = "http://127.0.0.1:5000/api";
    $res = $client->post($api_url, [
        'json' => [
            'name' => 'Petr',
            'age' => 23
        ]
        ]);
    $data_body = $res->getBody();
    echo $data_body;
   
});

Route::get('/Api-Get-Data', function () {
    $client = new Client();
    $data = $client->get("http://127.0.0.1:5000/Getdata");
    $data_body = $data->getBody();
    
    $api = $data_body;
    return $api;
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/todos', function () {
    return view('todos');
})->middleware(['auth', 'verified'])->name('todos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('todos', TodoController::class);
});

require __DIR__.'/auth.php';