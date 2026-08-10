<?php

use Illuminate\Support\Facades\Route;
use App\CicdTest;

Route::get('/', function () {
    $tests = CicdTest::all();

    return view('cicd', compact('tests'));
});