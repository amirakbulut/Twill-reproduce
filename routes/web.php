<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Page;
use App\Models\Service;

Route::get('/', function () {
    $page = Page::first();
    $services = Service::all();
    return view('welcome')->with(['page' => $page, 'services' => $services]);
});
