<?php

Route::get('/', 'HomeController');

Route::get('/about', 'AboutController');

Route::match(['get', 'post'], '/multi', function () {
    return 'Multiples Métodos';
});

Route::get('/echo/{word}', function ($word) {
    return sprintf('Said %s', $word);
});

Route::get('/said/{word?}', function ($word = 'Jossie') {
    return sprintf('Said %s', $word);
});

Route::get('user/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return '/admin/users';
    });
});

Route::get('list', 'ListController');
