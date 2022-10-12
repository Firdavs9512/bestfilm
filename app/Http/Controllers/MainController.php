<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $post = Movie::take(10)->get();
        return view('index.index', compact('post'));
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        $films = Movie::take(10)->get();
        return view('index.moviesingle', compact('movie','films'));
    }
    public function actiorshow($id)
    {
        $actior = Actior::find($id);
        $filmlar = $actior->movies->take(5);
        return view('index.actiorpage',compact('actior','filmlar'));
    }
    public function allmovielist()
    {
        $movies = Movie::paginate(30);
        return view('index.moviesgridfull',compact('movies'));
    }
}
