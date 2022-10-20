<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $tags = Tag::paginate(10);
        return view('tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $request->validate([
            'name' => 'required'
        ]);
        $data = new Tag([
            'name' => $request->name
        ]);
        $data->save();
        return redirect('admin/tag')->with(
            'success' , 'Tag is created!'
        );
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
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $tag = Tag::find($id);
        return view('tag.edit',compact('tag'));
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
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        $request->validate([
            'name' => 'required'
        ]);
        $tag = Tag::find($id);
        $tag->update([
            'name' => $request->name
        ]);
        return redirect('admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        session_start();
        if(!$_SESSION['name']){
            return redirect('/');
        }
        // dd($request);
        $tag = Tag::find($request->id);
        $tag->movies()->detach();
        $tag->delete();
        return redirect()->route('tagindex')->with('success','Tag success deleted!');
    }
}
