<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/webdesign', [WebController::class, 'webDesign'])->name('webdesign');
Route::get('/ui-ux-designer', [WebController::class, 'uiUxDesigner'])->name('ui-ux-designer');
Route::get('/terms-of-use', [WebController::class, 'termsOfUse'])->name('terms-of-use');

// Project Routes
Route::get('/project/reality-check-guide', [WebController::class, 'realityCheckGuide'])->name('project.reality-check-guide');
Route::get('/project/rent-the-stuff', [WebController::class, 'rentTheStuff'])->name('project.rent-the-stuff');
Route::get('/project/storie-vault', [WebController::class, 'storieVault'])->name('project.storie-vault');
Route::get('/project/pro-contractors-hub', [WebController::class, 'proContractorsHub'])->name('project.pro-contractors-hub');
Route::get('/project/cakeit', [WebController::class, 'cakeit'])->name('project.cakeit');
Route::get('/project/liming-around-the-world', [WebController::class, 'limingAroundTheWorld'])->name('project.liming-around-the-world');
Route::get('/project/one-off-autos', [WebController::class, 'oneOffAutos'])->name('project.one-off-autos');

// Contact Form Route
Route::post('/contact/send-email', [WebController::class, 'sendContactEmail'])->name('contact.send-email');
