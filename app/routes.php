<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('index');
});

Route::post('/', function()
{
    if (Input::has('Users'))
        return View::make('user');
    if (Input::has('Paragraph'))
        return View::make('para');
});


Route::get('/para', function()
{
    return View::make('para');
});

Route::get('/user', function()
{
    return View::make('user');
});

Route::post('/user/{dataReturn}', function($dataReturn)
{
    return View::make('user')->with('dataReturn',$dataReturn);
});

Route::post('/para/{paragraphs}', function($paragraphs)
{
    return View::make('para')->with('paragraphs',$paragraphs);
});


Route::post('para','UserController@showParagraph');
Route::post('user','UserController@showUser');
