<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/freelancers', function () {
    return view('freelancers');
});

// Route::get('/projects', function () {
//     return view('projects.index');
// });
// Route::get('/project', function () {
//     return view('projects.view');
// });
// Route::get('/project/create', function () {
//     return view('projects.create');
// });

Route::resource('projects', ProjectController::class);
