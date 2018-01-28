<?php

Route::group(['prefix' => 'hl-sekolah', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@index',
        'create'     => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@create',
        'store'     => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@store',
        'show'      => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@show',
        'update'    => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@update',
        'destroy'   => 'Bantenprov\HlSekolah\Http\Controllers\HlSekolahController@destroy',
    ];

    Route::get('/',$controllers->index)->name('hl-sekolah.index');
    Route::get('/create',$controllers->create)->name('hl-sekolah.create');
    Route::post('/store',$controllers->store)->name('hl-sekolah.store');
    Route::get('/{id}',$controllers->show)->name('hl-sekolah.show');
    Route::put('/{id}/update',$controllers->update)->name('hl-sekolah.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('hl-sekolah.destroy');

});

