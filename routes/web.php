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
Route::get('/test', function(){

    return App\User::find(1)->profile;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){ Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);

//PostController
    Route::get('/post/create' , ['uses' => 'PostController@create', 'as' => 'post.create']);
    Route::post('/post/store' , ['uses' => 'PostController@store', 'as' => 'post.store']);
    Route::get('/post/edit/{id}' , ['uses' => 'PostController@edit', 'as' => 'post.edit']);
    Route::post('/post/update/{id}',['uses' => 'PostController@update','as' =>'post.update']);
    Route::get('/post/delete/{id}' , ['uses' => 'PostController@destroy','as' => 'post.delete']);
    Route::get('/post/trashed' , ['uses' => 'PostController@trashed','as' => 'post.trashed']);
    Route::get('/post/kill/{id}' , ['uses' => 'PostController@kill', 'as' => 'post.kill']);
    Route::get('/post/restore/{id}' , ['uses' => 'PostController@restore','as' => 'post.restore']);
    Route::get('/posts' , ['uses' => 'PostController@index','as' => 'posts']);

//CategoriesController
    Route::get('/category/create' , ['uses' => 'CategoriesController@create', 'as' => 'category.create']);
    Route::get('/categories' , ['uses' => 'CategoriesController@index', 'as' => 'categories']);
    Route::get('/category/edit/{id}' , ['uses' => 'CategoriesController@edit', 'as' => 'category.edit']);
    Route::post('/category/store' , ['uses' => 'CategoriesController@store', 'as' => 'category.store']);
    Route::post('/category/update/{id}' , ['uses' => 'CategoriesController@update', 'as' => 'category.update']);
    Route::get('/categories/delete/{id}' , ['uses' => 'CategoriesController@destroy','as' => 'category.delete']);

//TagsController
    Route::get('/tags', ['uses' => 'TagsController@index', 'as' =>'tags']);
    Route::get('/tag/create',['uses' => 'TagsController@create', 'as' =>'tag.create']);
    Route::post('/tag/store' , ['uses' => 'TagsController@store', 'as' => 'tag.store']);
    Route::get('/tag/edit/{id}',['uses' => 'TagsController@edit', 'as' =>'tag.edit']);
    Route::post('/tag/update/{id}',['uses' => 'TagsController@update','as' =>'tag.update']);
    Route::get('/tag/delete/{id}',['uses' => 'TagsController@destroy', 'as' =>'tag.delete']);
});

