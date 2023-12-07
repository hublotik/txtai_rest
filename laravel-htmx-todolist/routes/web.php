<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\SearchController;
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

Route::any('/', [SearchController::class, 'title_page_tabels'])->name('layouts.master');


Route::match(
    ['get', 'post'],
    'exercises',
    [TestController::class, 'exercises_func']
)
    ->name('exercises');

Route::any('/main_page', [SearchController::class, 'main_func'])->name('main_page');

Route::any('/search', [SearchController::class, 'search']);
Route::any('/choice_page', [SearchController::class, 'choice_pg'])->name('choice_page');

Route::get('/Api-Post-Data', function () {
    $client = new Client();
    $api_url = "http://127.0.0.1:5000/api";
    $res = $client->post($api_url, [
        'json' => [
            'name' => 'QWERTy',
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
    $api = $data_body->getContents();
    $array = json_decode($api);
    return $array;
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

require __DIR__ . '/auth.php';
