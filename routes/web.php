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
use App\Models\Property;


// Route::get('/', function () {
//     $page = Page::first();

//     $services = Service::all();
//     return view('welcome')->with(['page' => $page, 'services' => $services]);
// });


// Route::get('test', function () {
//     App::setLocale('tr');
//     echo app()->getLocale();
//     $slug = 'ana-sayfa';
//     $page = Page::forSlug($slug)->firstOrFail();
    
//     return json_encode($page);
    
// });

Route::get('/', function () {
    return redirect('en/home');
});

Route::get('{locale}/{slug}', function ($locale, $slug) {
    App::setLocale($locale);
    $page = Page::forSlug($slug)->firstOrFail();
    return view('welcome')->with(['page' => $page]);
    
});

Route::get('test', function () {
    App::setLocale('tr');
    $property = Property::first();
    echo $property->propertyTypes[0]->translate(app()->getLocale())->title;

});
