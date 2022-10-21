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
        $search ="";
        $post = Movie::take(10)->get();
        $popular = Tag::find(1);
        $popular2 = Tag::find(2);
        $popular3 = Tag::find(3);
        $popular21 = Tag::find(4);
        $popular22 = Tag::find(5);
        $popular23 = Tag::find(6);
        $popular24 = Tag::find(7);
        $pupul = $popular->movies;
        $pupul2 = $popular2->movies;
        $pupul3 = $popular3->movies;
        $actiors = Actior::take(4)->get();
        return view('index.index', compact('post','pupul','pupul2','pupul3',
        'pupul21','pupul22','pupul23','pupul24','actiors','search'));
    }
    public function show($id)
    {
        $search = "";
        $movie = Movie::find($id);
        $films = Movie::take(10)->get();
        $viw = $movie->views;
        $viw = $viw + 1;
        $movie->update([
            'views'=> $viw
        ]);
        return view('index.moviesingle', compact('movie','films','search','viw'));
    }
    public function actiorshow($id)
    {
        $search = "";
        $actior = Actior::find($id);
        $filmlar = $actior->movies->take(5);
        return view('index.actiorpage',compact('actior','filmlar','search'));
    }
    public function allmovielist()
    {
        $search = "";
        $moviescount = Movie::all()->count();
        $movies = Movie::paginate(1);
        return view('index.moviesgridfull',compact('movies','moviescount','search'));
    }
    public function actiorlist()
    {
        $search = "";
        $actiors = Actior::paginate(1);
        $actiorcount = Actior::all()->count();
        return view('index.actiorlist',compact('actiors','actiorcount','search'));
    }

    public function search(Request $request)
    {
        // dd($request);
        $movies = Movie::where('name','LIKE','%'.$request->search.'%')->paginate(1);
        $search = $request->search;
        $moviescount = $movies->count();
        return view('index.moviesgridfull',compact('movies','moviescount','search'));

    }
}
