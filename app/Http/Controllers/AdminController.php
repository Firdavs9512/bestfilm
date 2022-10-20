<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\actiorPhoto;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Movie;
use App\Models\MoviePhoto;
use App\Models\Tag;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // session_start();
        // if(!session()->get('name')){
        //     return redirect('/');
        // }
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
        $success = auth()->attempt([
            'username' => request('username'),
            'password' => request('password')
        ], request()->has('remember'));
        if($success){
            // dd('d');
            // dd(auth()->user()->id);
            return redirect('/');
        }else{
            dd($success);
        }

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
        session(['name' => $request->username]);
        session(['email' => $request->email]);
        return redirect()->route('adminindex');
    }


    public function logout()
    {
        // session_start();
        // if($_SESSION['name']){
        //     // Session::forget('name');
        //     // Session::forget('email');
        //     session()->forget('name');
        //     session()->forget('email');
        //     return redirect('/');
        // }
        Auth::logout();
        return redirect('/');
    }
}
