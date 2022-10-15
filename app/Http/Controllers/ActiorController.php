<?php

namespace App\Http\Controllers;

use App\Models\Actior;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ActiorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actiors = Actior::paginate(10);
        return view('actior.index',compact('actiors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actior.create');
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
            'overview' => 'required',
            'name' => 'required',
            'country' => 'required',
            'biographi' => 'required',
            'birdday' => 'required|date',
            'photo' => 'image|required'
        ]);
        $file = $request->file('photo')->store('images/actiors');
        $data = new Actior([
            'name' => $request->name,
            'overview' => $request->overview,
            'photo' => $file,
            'country' => $request->country,
            'biographi' => $request->biographi,
            'birdday' => $request->birdday
        ]);
        $data->save();
        return redirect('admin/actior');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actior = Actior::find($id);
        return view('actior.show', compact('actior'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actior = Actior::find($id);
        return view('actior.edit', compact('actior'));
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
            'name' => 'required',
            'country' => 'required',
            'overview' => 'required',
            'birdday' => 'required',
            'biographi' => 'required',
        ]);
        $actior = Actior::find($id);
        $actior->update([
            'name' => $request->name,
            'country' => $request->country,
            'birdday' => $request->birdday,
            'overview' => $request->overview,
            'biographi' => $request->biographi
        ]);
        return redirect('admin/actior/'.$id);
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
