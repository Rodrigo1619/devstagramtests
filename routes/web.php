<?php

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal'); //poner el nombre del archivo de mi view
});
//pasamos el controlador creado, pero decimos que queremos la clase con el ::class y cual es el metodo que queremos usar
//cuando hacemos el -> name es como estamos nombrando a la ruta y eso ayuda para no ir a cambiar en todas las referencias hechas en las vistas
//si al metodo de abajo no le ponemos el -> name, simplemente toma el que tiene anterior, ya que registra la ruta, no el metodo
Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']) ->name('login');
Route::post('/login', [LoginController::class, 'store']) ->name('login');

Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');

/* Route::get('/muro', [PostController::class,'index']) ->name('posts.index');*/
//le pongo {} y lo que esta dentro se convierte en una variable, y para que funcione se haran cambios en el controller
//esto es para que se logre ver el nombre del usuario en la ruta
//despues de los : se le pone el valor que se tomara de la base de datos
Route::get('/{user:username}', [PostController::class,'index']) ->name('posts.index');
Route::get('/posts/create',[PostController::class,'create']) ->name('posts.create');

Route::post('/imagenes',[ImagenController::class, 'store'])->name('imagenes.store');