<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
use App\User;
// use App\Client;
// use App\Project;

Route::apiResource('/user', 'UsersController');
// Route::apiResource('/client', 'ClientsController');
// Route::apiResource('/project', 'ProjectsController');