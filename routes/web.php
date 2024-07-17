<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnuaireController;
use App\Http\Controllers\OffreController;
use \App\Http\Controllers\MessageController;


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
//
//Auth::logout();
//Session::flush();
Route::get('/', function () {
    return view('home');
});
//Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/admin', [HomeController::class, 'admin'])->name('admin_page');
Route::resource('/recruteurs', RecruteurController::class);
Route::resource('/offres', OffreController::class);

Route::get('recruteur/avocat', [RecruteurController::class,'avocat'])->name('avocat');
Route::get('recruteur/huissier', [RecruteurController::class,'huissier'])->name('huissiers');
Route::get('recruteur/expert', [RecruteurController::class,'expert'])->name('experts');
Route::get('recruteur/abonnement', [RecruteurController::class,'abonnement'])->name('abonnement');
Route::get('recruteur/recrutement', [RecruteurController::class,'recrutement'])->name('recrutement');

/**  partie annuaires
 *
 */
Route::get('annuaires/avocat', [AnnuaireController::class,'avocat'])->name('annuaireavocat');
Route::get('annuaires/huissier', [AnnuaireController::class,'huissier'])->name('annuairehuissiers');
Route::get('annuaires/expert', [AnnuaireController::class,'expert'])->name('annuaireexperts');
Route::get('annuaires/justice', [AnnuaireController::class,'justice'])->name('annuairejustice');
/*
 * partie message
 */

Route::resource('/message', MessageController::class);
