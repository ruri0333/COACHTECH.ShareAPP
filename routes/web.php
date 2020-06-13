<?php

use Illuminate\Support\Facades\Route;

Router::apiResource('/user', 'UserController');
Router::apiResource('/shares', 'SharesController');
Router::post('/register', 'RegisterController@post');
Router::post('/login', 'LoginController@post');
Router::post('/logout', 'LogoutController@post');
Router::get('/user', 'UserController@get');
Router::put('/user', 'UserController@put');
Router::post('/like', 'LikeController@post');
Router::delete('/like', 'LikeController@delete');
Router::post('/comments', 'CommentesController@post');
