<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $post = Movie::all();
        return view('index.index', compact('post'));
    }
    public function show($id)
    {
        $post = Movie::find($id);
        return view('movie.show', compact('post'));
    }
}
