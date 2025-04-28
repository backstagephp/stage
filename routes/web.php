<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('seed', function () {
    Artisan::call('backstage:seed');
});