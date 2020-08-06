<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/contacts');
});

Route::get('/contacts', 'ContatosController@get_all_contacts')->name('show_contacts');
Route::get('/deleteInvalidContacts', 'ContatosController@delete_contacts_with_invalid_email')->name('deleteInvalidContacts');
Route::post('/restoreContact/{type}/{id}', 'ContatosController@restore_contacts')->name('restore_contacts');
Route::delete('/deleteContact/{type}/{id}', 'ContatosController@delete_contacts')->name('delete_contacts');
