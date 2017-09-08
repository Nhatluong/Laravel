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

Route::get('index', function () {
    return view('index');
});
Route::get('/category/list' , 'CategoryController@showListCategory')->name("category.list");
Route::get('/category/add' , 'CategoryController@showAddForm')->name("show.add.category");
Route::post('/category/add' , 'CategoryController@addCategory')->name("category.add");
Route::get('/category/edit/{id}' , 'CategoryController@showEditForm')->name("show.edit");
Route::post('/category/edit/{id}' , 'CategoryController@editCategory')->name("category.edit");
Route::get('/category/delete/{id}' ,'CategoryController@showDeleteForm')->name("show.delete");
Route::post('/category/delete/{id}' , 'CategoryController@deleteCategory');

//product

Route::get('/product/list' , 'ProductController@showListProduct')->name('product.list');
Route::get('/product/add' , 'ProductController@showAddForm')->name('show.add.product');
Route::post('/product/add' , 'ProductController@addProduct');


