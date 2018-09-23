<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

| 1.1 Página 29 do Livro
Route::get('/', 'WelcomeController@index');


|  1.3 Página 30 do Livro **not working**
Route::get('/', function(){
    return Greeting::first()->body;
});

|  3.1 Página 45 do Livro - Rota basica
Route::get('/', function() {
    return 'Hello World!';
});


| 3.2 Página 46 - Exemplo de Sites
Route::get('/', function() {
    return view ('welcome');
});  

Route::get('about', function() {
    return view ('about');
});

Route::get('products', function() {
    return view ('products');
});

Route::get('services', function() {
    return view ('services');
});


| 3.2 Página 47 - Evitando os facades
$router->get('/', function() {
    return 'Hello World!';
});


| 3.3 Página 49 - Verbo de Rotas
Route::get ('/', function() {
    return 'Hello World!';
});

Route::post('/', function() {});

Route::put('/', function() {});

Route::delete ('/', function () {});

Route::any('/', function () {});

Route::match(['get','post'],'/', function () {});

| 3.4 Página 48 - Rotas Chamando métodos de controlador

Route::get('/', 'WelcomeController@index');


| 3.5 Página 49 - Parâmetros de Rotas
//Exemplo 1
Route::get('users/{id}/friends', functiom ($id) {
   // 
});

//Exemplo 2
Route::get('users/{userid}/comments/{commentId}', function(
    $thisIsActuallyTheUserId,
    $thisisReallyTheCommentId
){
    //
});

//Exemplo 2 - Melhorado com nomes iguais
Route::get('users/{userId}/comments/{commentId}', function(
    $userId,
    $commentId){
    //
});


| 3.6 Parametros de rotas opcionais - fornecendo valor-padrão
Route::get('users/{id?}', function($id = 'fallbackId') {
    //
});


| 3.7 Parametros de rotas
Route::get('users/{username}', function($id) {
    //
})->where('id','[0-9]+')

Route::get('users/{username}', function($username) {
    //
})-> where('username', '[A-Za-z]+')

Route::get('posts/{id}/{slug}', function ($id,$slug) {
    //
})where->(['id' => '[0-9]+', 'slug' => '[A-Za-z]+' ]);

| 3.9 - Definindo nomes a rota
Route::get('members/{id}', 'MembersController@show')->name('members.show');


// Youtube Fabio Vedovelli

Route::group(['as' => 'api.' 'prefix' => 'api'], function() 
{
    Route::get
})
*/
Route::view('/welcome', 'welcome');