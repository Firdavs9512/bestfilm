<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\actiorPhoto;
use App\Models\Category;
use App\Models\Movie;
use App\Models\MoviePhoto;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $views = 0;
        $actiorcount = Actior::all()->count();
        $tagcount = Tag::all()->count();
        $categorycount = Category::all()->count();
        $moviecount = Movie::all()->count();
        $total = $actiorcount + $tagcount + $moviecount + $categorycount;
        $aimagecount = actiorPhoto::all()->count();
        $mimagecount = MoviePhoto::all()->count();
        $imagetotal = $aimagecount + $mimagecount;
        foreach(Movie::all() as $movie){
            $views = $movie->views + $views;
        }
        return view('index.adminpanel',compact('total','imagetotal','actiorcount','tagcount','categorycount',
            'moviecount', 'views'
        ));
    }
}
