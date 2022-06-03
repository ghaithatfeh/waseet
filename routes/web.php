<?php

use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\Freelancers;
use App\Http\Livewire\Projects;
use App\Http\Livewire\Services;
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

Route::put('/freelancers/edit-bio/{user}', [FreelancerController::class, 'editBio']);
Route::get('/freelancers/personal-data/{user}', [FreelancerController::class, 'personalData']);

Route::resources([
    'projects' => ProjectController::class,
    'services' => ServiceController::class,
    'freelancers' => FreelancerController::class,
]);
Route::post('/offer/create', [OfferController::class, 'create']);

// Route::get('/service/{category}', [ServiceController::class, 'service']);
Route::get('/service/{category}', Services::class);
Route::get('/freelancers', Freelancers::class);
Route::get('/projects', Projects::class);

Auth::routes();

//للاستطلاع
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');