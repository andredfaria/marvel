<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class charactersController extends Controller
{
    public function index()
    {
        return "esse é o  index do controller";
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
