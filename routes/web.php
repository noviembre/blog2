<?php

/*
|--------------------------------------------------------------------------
| Tests
|--------------------------------------------------------------------------
|
|ESTA ES LA FORMA INVERSA DE LA CONSULTA ANTERIOR
|esta function busca la categoria a la cual pertenece el post 1:
|
|
*/

Route::get('/test', function (){

    return App\Post::find(1)->category;
});



/*
|--------------------------------------------------------------------------
| F R O N T E N D    -   F I L E S
|--------------------------------------------------------------------------
|
|Contiene archivos que se usa en el frontend
|
*/
Route::get('/', [

    # ----Index
   'uses' => 'FrontEndController@index',
    'as' => 'index'

]);



#======== Detalles del Post ==================
Route::get('/{slug}', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);

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

    // listar dormilones
    Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);
    // eliminar dormilones
    Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'posts.kill'
    ]);

    //despertar un a un dormilon
    Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'posts.restore'
    ]);

    //editar un post
    Route::get('/posts/edit/{id}',[
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
    //actualzar un post
    Route::post('/posts/update/{id}',[
        'uses' => 'PostsController@update',
        'as' => 'post.update'
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


    //================= TAGS ================
    // listar tags
    Route::get('/tags',[
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    //Crear Tag
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    //
    Route::post('/tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    //editar tag
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    //Actualizar Tag
    Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    //editar tag
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);



    //================= USERS ================
    // listar user
    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    //Crear user
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    //
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    //editar user
    Route::get('/user/edit/{id}',[
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ]);
    //Actualizar user
    Route::post('/user/update/{id}',[
        'uses' => 'UsersController@update',
        'as' => 'user.update'
    ]);
    //editar user
    Route::get('/user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);


    //=============== ADMIN ================
    Route::get('/user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ])->middleware('admin');

    //Retirar permisos de Admin
    Route::get('/user/not-admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);


    //=============== PROFILES ===========
    #profile listar
    Route::get('/user/profile',[
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);

    #profile editar
    Route::post('/user/profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);


    //=================== SETTINGS ==============
    //mostrar settings
    Route::get('/settings',[
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);
    Route::post('/settings/update',[
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);


    #================= NOTA ==========
    #------- TOCA:
    #------- blog/ commit /08 creando las categorias
    #------- video 28. categories
    #-------

});