<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
// Task Routes
Route::post('/tasks', [TaskController::class, 'add']);
Route::patch('/tasks/{id}', [TaskController::class, 'markCompleted']);
Route::get('/tasks/pending', [TaskController::class, 'pendingTasks']);

// Post Routes
Route::post('/posts', [PostController::class, 'create']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
