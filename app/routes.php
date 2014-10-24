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
//This accesses the index screen which displays both the links for user access
Route::get('/', function()
{
    return View::make('index');
});

//This sends the user request to the appropriate link for further inputs
Route::post('/', function()
{
    if (Input::has('Users'))
        return View::make('user');
    if (Input::has('Paragraph'))
        return View::make('para');
});

//This is the request screen for Lorem Ipsum Generator
Route::get('/para', function()
{
    return View::make('para');
});

//This is the request screen for fabricated users
Route::get('/user', function()
{
    return View::make('user');
});

//This is the route to post results back to the screen for users
Route::post('/user/{dataReturn}', function($dataReturn)
{
    return View::make('user')->with('dataReturn', $dataReturn);
});

//This is the route to post results back to the screen for Lorem ipsum Generator
Route::post('/para/{paragraphs}', function($paragraphs)
{
    return View::make('para')->with('paragraphs', $paragraphs);
});

//These are the User Controller routes needed for the actual processing
Route::post('para', 'UserController@showParagraph');
Route::post('user', 'UserController@showUser');
