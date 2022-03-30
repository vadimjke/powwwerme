<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeployController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::statamic('authors', 'author.index');
Route::statamic('authors/{handle}', 'author.show');

// Git CD fixed (!)
Route::post('/deploy/', [DeployController::class, 'deploy']);