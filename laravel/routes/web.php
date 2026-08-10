<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
        <h1>CI/CD Laravel 7 Berhasil 🚀</h1>
        <p>Version: 1.0</p>
        <p>Environment: Production</p>
    ';
});