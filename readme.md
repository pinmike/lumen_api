# REST API based on the Lumen PHP Framework

Uses Laravel Lumen, a  fast PHP micro-framework for building web applications with expressive, elegant syntax. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Installation instructions

* Clone the app
* Create a local database
* Copy .env.example to .env and populate database details
* run `php artisan migrate` to run migrations
* run the app with `php -S localhost:8000 -t public`
* hit up the endpoints listed in routes/web.php

## Lumen Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)

## Original tutorial source

Original lumen API guide here:

https://paulund.co.uk/creating-a-rest-api-with-lumen

Several bugs in the guide fixed however:

* Tutorial states to put Model in App/Http however it should go in App
* Need to set $timestamps = false in the Model otherwise it tries to use columns not in the migration
* Lumen now uses $router in the routes file instead of $app
* Eloquent does not return items in the json, just a list of items

Basically a guide for an older version of lumen, a few things have changed..

