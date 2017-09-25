<?php

//$app->post('accessToken', 'AccessTokenController@createAccessToken');


$router->get('/', function() use ($router) {
    return 'Hello World';
});


//$app->get('/', function() use ($app) {
//    return $app->version();
//});


$router->group(['prefix' => 'books'], function() use ($router)
{
    $router->get('/','BooksController@index'); //get all the routes
    $router->post('/','BooksController@store'); //store single route
    $router->get('/{id}/', 'BooksController@show'); //get single route
    $router->put('/{id}/','BooksController@update'); //update single route
    $router->delete('/{id}/','BooksController@destroy'); //delete single route
});
