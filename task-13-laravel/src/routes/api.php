<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Books\BooksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeProjectsController;

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





Route::group(['middleware' => ['auth.basic']], function () {
   
    Route::group(['prefix' => 'employees'], function () {
        Route::apiResource('projects', ProjectController::class);
        Route::apiResource('{employee_id}/projects',EmployeeProjectsController::class);
    });
    Route::apiResource('employees', EmployeeController::class);
});

Route::put('/employees/{employeeId}/projects/{projectId}', 'EmployeeProjectsController@update');
Route::delete('/employees/{employeeId}/projects/{projectId}', 'EmployeeProjectsController@destroy');





//

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth.basic')->group(function () {
    Route::apiResource('books', BooksController::class);
});

Route::get('/', function () {
    return response()->json([
        'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
    ]);
});

