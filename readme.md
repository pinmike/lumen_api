# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)

Uses Laravel Lumen, a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Original tutorial source

Original tutorial here:

https://paulund.co.uk/creating-a-rest-api-with-lumen

Several issues fixed however:

* Tutorial states to put Model in App/Http however it should go in App
* Need to set $timestamps = false in the Model otherwise it tries to use columns not in the migration
* Lumen now uses $router in the routes file instead of $app
* Eloquent does not return items in the json, just a list of items
