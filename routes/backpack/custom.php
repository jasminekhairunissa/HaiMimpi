<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
        Route::get('blog', 'BlogController@showAll');
        Route::get('blog/{id}', 'BlogController@showArticle');
        Route::crud('article', 'ArticleCrudController');
        Route::crud('category', 'CategoryCrudController');
        Route::crud('tag', 'TagCrudController');
    Route::crud('dream', 'DreamCrudController');
}); // this should be the absolute last line of this file