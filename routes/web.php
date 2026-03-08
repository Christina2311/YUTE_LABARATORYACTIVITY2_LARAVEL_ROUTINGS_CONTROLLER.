 
<?php

// / → shows the homepage
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
 
// /register (GET) → shows the registration form
Route::get('/', [RegistrationController::class, 'home'])->name('home'); 
Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
 
// /register (POST) → processes the submitted form
Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');