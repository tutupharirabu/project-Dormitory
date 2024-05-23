<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogsController;

Route::get('/', [LogsController::class, 'create']);
