<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/pesquisa-geral', [UserController::class, 'pesquisaGeral'])->middleware('jwt.query');
    Route::get('/pesquisa-filtrada', [UserController::class, 'filtrar'])->middleware('jwt.query');
});