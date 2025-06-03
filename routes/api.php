<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MrSgd00Controller;

Route::get('/mr_sgd00', [MrSgd00Controller::class, 'index']);
Route::get('/mr_sgd00/{id}', [MrSgd00Controller::class, 'show']);
