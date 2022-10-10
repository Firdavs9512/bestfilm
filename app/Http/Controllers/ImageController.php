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
        $post = Actior::find($id);
        $file = $request->file('photo')->store('images/actiors');
        $post->actiorPhotos()->create([
            'name' => $file
        ]);
        return redirect('/actior/'.$id);
    }

    public function movieimage(Request $request, $id)
    {
        $movie = Movie::find($id);
        $file = $request->file('photo')->store('images/movies');
        $movie->moviephotos()->create([
            'name' => $file
        ]);
        return redirect('/movie/'.$id.'/edit');
    }
}
