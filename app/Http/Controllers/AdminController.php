<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\actiorPhoto;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Movie;
use App\Models\MoviePhoto;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function signin(Request $request)
    {
        // dd($request);

    }

    public function signup(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|unique:admins',
            'password' => 'required',
        ]);
        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('adminindex');
    }
}
