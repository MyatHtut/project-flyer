<?php

/* pages */
Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

Route::get('/about', ['as' => 'pages.about', 'uses' => 'PagesController@about']);

Route::get('/contact', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);

/* flyers */
$router->get('/flyers/create', ['as' => 'flyers.create', 'uses' => 'FlyersController@create']);
