<?php

use App\Http\Controllers\HotelController;
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



/**
 * Les routes de la gestions des hotels
 */

 Route::get('/hotels', [HotelController::class, 'afficherTous'])->name('hotels.afficher');
 Route::get('/hotels/creer', [HotelController::class, 'creerHotel'])->name('hotels.creer');
 Route::post('/hotels', [HotelController::class, 'enregistrerHotel'])->name('hotels.store');
 Route::post('/hotels/{id}/supprimer', [HotelController::class, 'supprimer'])->name('hotels.supprimer');



 Route::get('/hello/{name}', function($name){
     return 'bonjour '.$name;
 });

//  Route::get('/hello/name', function($name){
//     return 'bonjour '.$name;
// });