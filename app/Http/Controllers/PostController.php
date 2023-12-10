<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        //protegemos las vistas, dado que para poder interactuar (dar like, comentar, ect) debe tener cuenta el usuario
        $this->middleware('auth');
    }
    public function index(User $user){
        //dd(auth()->user()); //aqui es donde ire guardando si el usuario esta autenticado
        
        return view('layouts.dashboard', ['user'=> $user]); //el arreglo es para pasarle la informacion del modelo al view
    }
    public function create(){
        return view('posts.create');
    }
}
