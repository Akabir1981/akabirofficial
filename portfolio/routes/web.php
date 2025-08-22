<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio'); // আপনার Blade file নাম
});

Route::get('/articles/view', function () {
    return view('articles.view'); // Subfolder 'articles' + file name 'view.blade.php'
});

Route::get('/articles/manage', function () {
    return view('articles.manage'); // Subfolder + file name
});

Route::get('/articles/admin', function () {
    return view('articles.admin'); // Subfolder + file name
});
