<?php

use Illuminate\Http\Request;


Route::post('/create','TemplatesController@create_templet');
Route::put('/edit/{id}','TemplatesController@edit_template');
Route::delete('/delete/{id}','TemplatesController@delete_template');