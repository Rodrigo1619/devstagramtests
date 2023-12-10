<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    //
    public function store(Request $request){
        /* $input = $request->all(); //para ver todos los requests

        //construimos una respuesta y mandamos el arreglo de input y convertimos eso a json
        return response()->json($input); */

        $imagen = $request->file('file');

        return response()->json(['imagen' => $imagen->extension() ]);
    }
}
