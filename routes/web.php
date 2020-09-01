<?php

use Illuminate\Support\Facades\Route;
use App\Patient;

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
    return view('/welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::resource('products', 'ProductController'); // Product CRUD

Route::resource('cart', 'CartController'); // Cart CRUD

Route::get('/viderpanier', function () {
    \Gloudemans\Shoppingcart\Facades\Cart::destroy();
});


/*

//Route::get('/home/{user}', 'PatientController@index')->name('patients.index'); //route vers patient

Route::get('/patient/{id}', 'PatientController@show')->name('patients.show'); //affiche l'information sur un patient séléctionné

Route::resource('patients', 'PatientController'); // Patient CRUD

Route::post('/patients/search', 'PatientController@search')->name('patients.search'); // rechercher patient

Route::get('/pdf', 'PatientController@pdf')->name('patients.pdf');

Route::get('/generatepdf', function (Patient $patient) {


    $pdf = PDF::loadView('patients.show',compact('patient'));
    return $pdf->download('test.pdf');
});

*/
