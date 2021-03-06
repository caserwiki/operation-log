<?php

use Zx\Admin\OperationLog\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('auth/operation-logs', Controllers\LogController::class.'@index')->name('zx-center.operation-log.index');
Route::delete('auth/operation-logs/{id}', Controllers\LogController::class.'@destroy')->name('zx-center.operation-log.destroy');
