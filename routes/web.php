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
    return view('welcome');
});

Auth::routes();




/*
|--------------------------------------------------------------------------
| G R U P O    -   A D M I N
|--------------------------------------------------------------------------
|
|
|
*/
Route::group(['prefix' => 'admin', 'middleware'=> 'auth' ], function (){


    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    #---------------------------------------
    #------------------------ POST ---------

    //listar post
    Route::get('/posts',[
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    // Dormir un post
    Route::get('/post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);




    #---------------------------------------
    #--------------- C A T E G O R I E S----

    Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);


    //editar categoria
    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    // actualizar categoria
    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

    // borrar categoria
    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    #================= NOTA ==========
    #------- TOCA:
    #------- blog/ commit /08 creando las categorias
    #------- video 28. categories
    #-------

});