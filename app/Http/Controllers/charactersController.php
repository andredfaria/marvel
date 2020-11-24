<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

use App\herois;

class charactersController extends Controller
{
    public function listar($id)
    {   

        if(!isset($id))
            $registros = herois::all();
        else
            $registros = herois::all()->where('id','=', $id);

        return view('characters',compact('registros'));
    }

    public function comics()
    {
        return view('comics');
    }

    public function post(Request $req)
    {   
        return dd($req);
    }

    public function tela()
    {   
        return view('index');
    }


}
