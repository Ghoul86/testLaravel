<?php

use Illuminate\Support\Facades\Route;
use App\Models\Language;
use App\Http\Controllers\LanguageController;


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


Route::domain('www.php.testlaravel')->group(function () {
    Route::get('/', function () {
    return view('accueil', ['Languages' => Language::all(), 'titre' => "des langues"]);
    });
});

Route::domain('fr.php.testlaravel')->group(function () {
    Route::get('/', function () {
    return view('accueil', ['Languages' => Language::all(), 'titre' => "des langues"]);
    });
});

