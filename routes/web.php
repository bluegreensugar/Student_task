<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/groups', function () {
    return redirect(route('groups.index'));
});
Route::resource('groups', 'GroupsController');

