<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Categorie;
use App\Models\Client;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FondateurController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::Get('/categories',function(){
    $categories= Categorie::get();
    return response()->JSON($categories);
}); 
// Route::Get('/client',function(){
//     $categories= Client::get();
//     return response()->JSON($categories);
// });
Route::Resource("/client",ClientController::class);
Route::Resource("/fondateur",FondateurController::class);

// Route::post("/categories" ,[CategorieController::class,"ajouter"]);
// Route::resource('/categories', 'CategorieController');