<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::any('/test', function () {
    return 'eqwe';
});


Route::any('/amp_price_sort', [SearchController::class, 'htmx_test'])->name('amp_price_sort');

Route::any('/queryed_amp', [SearchController::class, 'queryed_amp'])->name('queryed_amp');

Route::any('/txtai_apply', [SearchController::class, 'txtai_apply'])->name('txtai_apply');

Route::any('/search', [SearchController::class, 'search'])->name('search');


