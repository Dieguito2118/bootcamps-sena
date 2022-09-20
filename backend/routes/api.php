<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ReviewsController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('bootcamps' , BootcampController::class );
Route::apiResource('courses' , CoursesController::class);
Route::apiResource('reviews' , ReviewsController::class);
//Ruta especifica para crearle un curso a un Bootcamp
Route::post("courses/{idbootcamp}/create" ,
                [ CoursesController::class , "store"]
);
//Ruta especifica para crearle un curso a un Reviews
Route::post("reviews/{idreviews}/create" ,
                [ ReviewsController::class , "store"]
            );