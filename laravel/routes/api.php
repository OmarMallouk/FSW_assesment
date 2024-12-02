<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserProjectController;
use App\Http\Controller\UsersController;
use App\Http\Controller\Project;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::middleware(['auth:api'])->group(function () {
    Route::get('/users', [UsersController::class, 'get_Users']);
    Route::get('/projects', [ProjectController::class, 'get_Projects']);
    Route::get('/projects1', [ProjectController::class, 'get_ProjectId']);
    Route::get('/allPro', [UserProjectController::class, 'get_AllProjects']);

  });
  