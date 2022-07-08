<?php

use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\Freelancers;
use App\Http\Livewire\Portfolios;
use App\Http\Livewire\Projects;
use App\Http\Livewire\Services;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::put('/freelancers/edit-bio/{user}', [FreelancerController::class, 'editBio']);
    Route::get('/my/profile', [FreelancerController::class, 'personalData'])->name('personal-data');
    Route::post('/freelancers/personal_data_update/{user}', [FreelancerController::class, 'personalDataUpdate']);
    Route::post('/change-password', [FreelancerController::class, 'changePassword']);

    Route::delete('/services/delete-image/{image}', [ServiceController::class, 'deleteImage']);
    Route::delete('/projects/delete-file/{file}', [ProjectController::class, 'deleteImage']);

    Route::post('/offer/store', [OfferController::class, 'store']);
    Route::delete('/offer/{offer}', [OfferController::class, 'destroy']);
});

Route::resources([
    'projects' => ProjectController::class,
    'services' => ServiceController::class,
    'freelancers' => FreelancerController::class,
    'portfolios' => PortfolioController::class,
]);

// livewire components
Route::get('/service/{category}', Services::class);
Route::get('/freelancers', Freelancers::class);
Route::get('/projects', Projects::class);
Route::get('/portfolios', Portfolios::class);
