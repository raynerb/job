<?php

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


use App\Models\Competence;
use App\Http\Controller\CandidatController;
use App\Models\FormationAcademique;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/article','ArticleController@show');
Route::delete('/article/{id}','ArticleController@destroy');
Route::get('/competence', 'CompetenceController@show');
Route::get('/candidat', 'CandidatController@show');
Route::delete('candidat/{id}','CandidatController@delete');
Route::get('/cotation','CotationController@show');
Route::get('/depocv','DepocvController@show');
Route::get('/formationacademique','FormationAcademiqueController@show');

