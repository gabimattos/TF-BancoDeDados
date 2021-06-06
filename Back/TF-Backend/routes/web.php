<?php

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

use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ListTypeController;

Route::get('/', [QuestionnaireController::class, 'index']);


Route::get('/questionario', function (){
    return view('questionario');
});

Route::get('/resposta', function (){
    return view('resposta');
});

Route::get('/tipos-de-questoes', function (){
    return view('tipos-de-questoes');
});

Route::get('/questoes', function (){
    return view('questoes');
});
