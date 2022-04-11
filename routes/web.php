<?php

use App\Http\Controllers\KeyLanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Tests\Feature\KeyLanguageTest;

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

Route::redirect('/','/en');


Route::group(['prefix'=>'{language}'],function()
{

Route::get('/',function(){
    return view('index');
});

Route::get('/contact-us',function(){
    return view('contact-us');
});

Route::get('/about-us',function(){
    return view('about-us');
});

Route::get('/getting-involved',function(){
    return view('getting-involved');
});

Route::get('/projects',function(){
    return view('projects');
});

Route::get('/team',function(){
    return view('team');
});

Route::get('/industries',function(){
    return view('industries');
});

Route::get('/media',function(){
    return view('media');
});

Route::get('/language',function(){
    return view('language');
});

Route::get('/general-terms-condition',function(){
    return view('general-terms-condition');
});

Route::get('/opportunities',function(){
    return view('opportunities');
});

});
