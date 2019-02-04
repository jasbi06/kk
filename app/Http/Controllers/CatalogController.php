<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
       // $pelis = $this->arrayPeliculas;
        $arrayPeliculas = Movie::all();
        return view('catalog.index')->with('arrayPeliculas',$arrayPeliculas);
    }

    public function getShow($id)
    {
       // $pelis = $this->arrayPeliculas[$id];
        $peliculas = Movie::findOrFail($id);

        return view('catalog.show', array('peliculas'=>$peliculas));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        //$pelis = $this->arrayPeliculas[$id];
        $peliculas = Movie::findOrFail($id);
        return view('catalog.edit', array('peliculas'=>$peliculas));
    }

    public function changeRented($id){

        $movie = Movie::findOrFail($id);
        return view('catalog.changeRented', array('movie'=>$movie));
    }


}
