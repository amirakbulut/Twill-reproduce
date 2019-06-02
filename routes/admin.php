<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::module('pages');
Route::module('properties');
Route::module('services');
Route::module('propertyTypes');
Route::module('countries');
Route::module('cities');

Route::prefix('browser')->group(function () {
    Route::module('services');
    Route::module('properties');
    Route::module('propertyTypes');
    Route::module('countries');
    Route::module('cities');
});
