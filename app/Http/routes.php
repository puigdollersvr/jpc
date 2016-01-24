<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return View::make('pages.home');
});

Route::get('/courses', function(){
    return View::make('pages.courses');
});

Route::get('/exercices', function(){
    return View::make('pages.exercices');
});

Route::get('/exercice', function(){
    return View::make('pages.exercice');
});

Route::get('/exercice-1', function(){
    return View::make('pages.exercice-1');
});

Route::get('/exercice-2', function(){
    return View::make('pages.exercice-2');
});

Route::get('/video', function(){
    return View::make('pages.video');
});

Route::get('/events', function(){
    return View::make('pages.calendar');
});

Route::get('/blog', function(){
    return View::make('pages.blog');
});

Route::get('/blog-article', function(){
    return View::make('pages.blog-article');
});

Route::get('/teachers', function(){
    return View::make('pages.teachers');
});