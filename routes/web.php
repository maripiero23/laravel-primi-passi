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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function() {

    $prova = "il primo esercizio con Laravel";
    return view('home', [
        "prova" => $prova
    ]);

});

Route::get('/aboutus', function() {
    $sponsors = ["Nike", "Adidas", "Puma", "Armani"];

    $contatti =[
        "numero" => 37389293,
        "indirizzo" => "Via Reno,5",
        "email" => "negoziosport@gmail.com"

    ];


    return view('aboutus', [
        "contatti" => $contatti,
        "sponsor" => $sponsors
    ]);

    
});

Route::get('/login', function() {
    return view('login');

});