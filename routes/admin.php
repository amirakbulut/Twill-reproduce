<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::module('pages');
Route::prefix('content')->group(function () {
    Route::module('services');
    Route::module('properties');
});
