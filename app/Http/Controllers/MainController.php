<?php

namespace App\Http\Controllers;

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
        return view('index.moviesingle', compact('movie'));
    }
}
