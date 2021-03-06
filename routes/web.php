<?php

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
    return view('home');
});

Auth::routes();

Route::get('/', 'itemController@getAllItems');
Route::get('edit_user_data', 'UserController@edit_user_data');
Route::post('/edit_user_data', 'UserController@update_user_data');

Route::get('loadAddForm','itemController@loadAddForm');
Route::post('additem','itemController@addItem');
Route::get('getItem/{id}','itemController@getItem');
Route::get('item_details/{id}','itemController@getItemDetails');

//Route::get('viewItem','itemsController@loa');
Route::get('viewItemDetails', function () {
    return view('viewItemDetails');
});
Route::get('deleteItem/{id}','itemController@deleteItem');
Route::post('updateItem','itemController@updateItem');

Route::get("ahmed", function(){
    $items  =  \App\Item::all();
    return view('ahmed', compact('items'));
});

// Route::get('makeBid','itemController@makeBid');
// Route::post('item_details/{id}','itemController@makeBid');
// Route::get('bid', function () {
//     return view('bid');
// });

Route::get('item_details/{id}/bid','itemController@makeBid');

Route::get('items','itemController@index');
Route::get('searchItems','itemController@searchItems');
Route::get('products','itemController@GetUserItems');