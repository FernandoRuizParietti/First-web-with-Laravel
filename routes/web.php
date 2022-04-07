<?php


Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('/', 'PageController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PageController@update')->name('notas.update');

Route::delete('/eliminar/{id}','PageController@eliminar')->name('notas.eliminar');

Route::get('/fotos', 'PageController@fotos')->name('foto');

Route::get('/blog','PageController@blog' )->name('blog');

Route::get('/nosotros/{nombre?}', 'PageController@nosotros' )->name('us');