<?php
    Route::resource('/', 'HomeController');
    Route::resource('publisher', 'PublisherController');
    Route::resource('book', 'BookController');
    Route::resource('author', 'AuthorController');
    Route::dispatch();
?>
