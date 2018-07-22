<?php

Route::get('/', 'TestController@welcome');

Route::get('/prueba', function () {
    return 'welcome';
});