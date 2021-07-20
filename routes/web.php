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
})->name('accueil');

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



Route::get('etat-civil', function () {
    return view('pages/etat-civil');
})->name('etat-civil');


Route::get('attestation-certif', function () {
    return view('pages/attestation-certif');
})->name('attestation-certif');

Route::get('attestation', function () {
    return view('pages/attestation');
})->name('attestation');

Route::get('certificat', function () {
    return view('pages/certificat');
})->name('certificat');


Route::get('commerce-entre', function () {
    return view('pages/commerce-entre');
})->name('commerce-entre');


Route::get('autres', function () {
    return view('pages/autres');
})->name('autres');


Route::get('faqs', function () {
    return view('pages/faqs');
})->name('faqs');

Route::get('prestation', function () {
    return view('pages/prestation');
})->name('prestation');

Route::get('prestation-form', function () {
    return view('pages/prestation-form');
})->name('prestation-form');

Route::get('paiement', function () {
    return view('pages/paiement');
})->name('paiement');


Route::get('actualites', function () {
    return view('pages/actualites');
})->name('actualites');

