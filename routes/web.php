<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[SchoolController::class, "index"]);
Route::get( "/uj-tanulo", [SchoolController::class, "newStudent"]);
Route::post("submit-student", [SchoolController::class, "storeStudent"]);
Route::get("/keres-tanulo", [SchoolController::class, "showStudent"]);
Route::get("show-Update-Student", [SchoolController::class, "showUpdateStudent"]);
Route::post("/update-student",[SchoolController::class, "updateStudent"]);