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

Route::get('/index', function () {
    return view('index');
});

Route::get('/hello', function () {
    return view('hello');
});


Route::get('/cadastrar', function () {
  return view('cadastrar');
});

Route::get('/salvar', function () {
   	$name =  $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $id = $_GET['id'];
    $user = "";

    if($id == 0){
    	 // Insere um novo usuário ao banco de dados:
    	$user = \App\User::create([
        'name'         => $name,
        'email'     => $email,
        'password'     => bcrypt($senha),
    	]);
    }else{
    	$user = App\User::find($id);

		$user->name = $name;
		$user->email = $email;
		$user->password = bcrypt($senha);
		$user->save();
    }
 
    return view('index');
});



Route::get('/atualizar', function () {
 	
 	 return view('atualizar');
});


Route::get('/remover', function () {
	$id = $_GET['id'];
  	App\User::destroy($id);
  	return view('index');
});