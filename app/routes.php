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
    return 'Posted';
});

Route::get('/example',function()
{
    // Hay 2 maneras diferentes de pasar valores

    // 1:
    $hello = "Hello";
    $world = "World";
    return View::make('example.index')->with(array(
        'items' => array(
            'Item 1',
            'Item 2',
            'Item 3'
        )));

    /* 2
    $data = array(
        'hello' => 'Hello',
        'world' => 'World'
    );
    return View::make('example.index', $data);
    */

});