<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\actiorPhoto;
use App\Models\Movie;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function image($id,Request $request)
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $request->validate([
            'photos'=> 'required|image'
        ]);
        $post = Actior::find($id);
        $file = $request->file('photos')->store('images/actiors');
        $post->actiorPhotos()->create([
            'name' => $file
        ]);
        return redirect('admin/actior/'.$id);
    }

    public function movieimage(Request $request, $id)
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $request->validate([
            'photos' => 'required|image'
        ]);
        $movie = Movie::find($id);
        $file = $request->file('photos')->store('images/movies');
        $movie->moviephotos()->create([
            'name' => $file
        ]);
        return redirect('admin/movie/'.$id.'/edit');
    }
}
