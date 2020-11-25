<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

use App\herois;

class charactersController extends Controller
{
    public function tela()
    {
        return view('index');
    }

    public function listar($id = 0, $param = '')
    {
                
        if ($id === 0 && $param === '') {

            $registros = herois::paginate(20);
            return view('characters', compact('registros'));

        } elseif ($id !== 0 && is_int($id) && $param === '') {

            $registros = herois::all()->where('id', '=', $id);
            return view('characters', compact('registros'));

        } elseif ($id === 'comics' ) {

            $registros = herois::all()->groupBy('editora')->toArray();
            dd($registros);
            
        } elseif ((int)$id !== 0 && $param =='comics') {
            
            $registros = herois::all()->where('id', '=', $id)->groupBy('editora')->toArray();
            dd($registros);

        } elseif ($id === 'events') {
            $registros = herois::all()->groupBy('editora')->toArray();
        } elseif ($id !== 0 && is_int($id) && $param === 'events') {
            $registros = herois::all()->groupBy('editora')->toArray();
        } elseif ($id === 'series') {
            $registros = herois::all()->groupBy('editora')->toArray();
        } elseif ($id !== 0 && is_int($id) && $param === 'series') {
            $registros = herois::all()->groupBy('editora')->toArray();
        } elseif ($id === 'stories') {
            $registros = herois::all()->groupBy('editora')->toArray();
        } elseif ($id !== 0 && is_int($id) && $param === 'stories') {
            $registros = herois::all()->groupBy('editora')->toArray();
        }else{
            dd('erro');
        }

        $view = $param ? $param : $id;
        
        return view($view , compact('registros'));
    }

    public function comics($id = 0)
    {   
        
        $registros = herois::all()->groupBy('editora')->toArray();
        if ($id !== 0)
            $registros = herois::all()->where('id', '=', $id);

        return view('comics', compact('registros'));
    }

    public function events($id = 0)
    {
        $registros = herois::all();
        if ($id !== 0)
            $registros = herois::all()->where('id', '=', $id);

        return view('events', compact('registros'));
    }

    public function series($id = 0)
    {
        $registros = herois::all();
        if ($id !== 0)
            $registros = herois::all()->where('id', '=', $id);

        return view('series', compact('registros'));
    }

    public function stories($id = 0)
    {
        $registros = herois::all();
        if ($id !== 0)
            $registros = herois::all()->where('id', '=', $id);

        return view('stories', compact('registros'));
    }

    public function buscar($id = 0, $param ='')
    {

        dd($id, $param);

        $registros = herois::all();
        if ($id !== 0)
            $registros = herois::all()->where('id', '=', $id);

        return view('stories', compact('registros'));
    }

}
