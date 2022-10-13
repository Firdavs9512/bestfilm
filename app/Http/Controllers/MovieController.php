<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(10);
        return view('movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tags = Tag::all();
        $categories = Category::all();
        $actiors = Actior::all();
        return view('movie.create', compact('tags','categories','actiors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'overview' => 'required',
            'date' => 'required|date',
            'photo' => 'required|image',
            'filmtime' => 'required',
            'reating' => 'required|integer|max:10',
            'categories' => 'required|array|max:3'
        ]);
        //dd($request->tags);
        $file = $request->file('photo')->store('images/movies');
        $movies = new Movie([
            'name' => $request->name,
            'photo' => $file,
            'overview' => $request->overview,
            'date' => $request->date,
            'reating' => $request->reating,
            'filmtime' => $request->filmtime
        ]);
        $movies->save();
        if(isset($request->tags) and isset($request->categories)){
            foreach ($request->tags as $tag)
            {
                $movies->tags()->attach($tag);
            }

            foreach ($request->categories as $category)
            {
                $movies->categories()->attach($category);
            }
            foreach($request->actiors as $actior){
                $movies->actiors()->attach($actior);
            }
        }

        return redirect('admin/movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movie.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'overview' => 'required',
            'date' => 'required|date',
            'photo' => 'image',
            'filmtime' => 'required',
            'reating' => 'required|integer|max:10',
        ]);

        $movie = Movie::find($id);
        if(null !== ($request->file('photo'))){
            $file = $request->file('photo')->store('images/movies');
        }else{
            $file = $movie->photo;
        }
        $movie->update([
            'name' => $request->name,
            'reating' => $request->reating,
            'date' => $request->date,
            'filmtime' => $request->filmtime,
            'photo' => $file,
            'overview' => $request->overview
        ]);
        return redirect('admin/movie/'.$request->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
