<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $post = Movie::take(10)->get();
        $popular = Tag::find(1);
        $popular2 = Tag::find(4);
        $popular3 = Tag::find(3);
        $pupul = $popular->movies;
        $pupul2 = $popular2->movies;
        $pupul3 = $popular3->movies;
        $actiors = Actior::take(4)->get();
        return view('index.index', compact('post','pupul','pupul2','pupul3','actiors'));
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        $films = Movie::take(10)->get();
        $viw = $movie->views;
        $viw = $viw + 1;
        $movie->update([
            'views'=> $viw
        ]);
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
        $moviescount = Movie::all()->count();
        $movies = Movie::paginate(1);
        return view('index.moviesgridfull',compact('movies','moviescount'));
    }
    public function actiorlist()
    {
        $actiors = Actior::paginate(1);
        $actiorcount = Actior::all()->count();
        return view('index.actiorlist',compact('actiors','actiorcount'));
    }
}
