<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello Ruru！🎉'; #Ruru可以改成你的名字
});

Route::get('/welcome', function () {
    return 'Welcome, Laravel!';
}) -> name('welcome.page');

Route::get('/start', function () {
    return redirect()->route('welcome.page');
});

Route::get('/about', function () {
    return view('about', [
        'team' => 'Laravel Lovers',
        'members' => ['Celia', 'Ruru', 'Tako']
    ]);
});


