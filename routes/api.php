<?php

use App\Http\Controllers\TextToVideo_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/sibi-video/{videoName}', [TextToVideo_controller::class, 'textToVideo']);
Route::get('/sibi-video/{videoNames}', [TextToVideo_controller::class, 'textToVideo']);
Route::get('/bisindo-video/{videoNames}', [TextToVideo_controller::class, 'textToVideo2']);
