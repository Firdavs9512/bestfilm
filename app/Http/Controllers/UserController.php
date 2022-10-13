<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' =>'required'
        ]);
        if(isset($request->photo)){
            $file = $request->file('photo')->store('images/users');
        }
        $data = new User([
            'firsname' =>$request->firsname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'username' => $request->username,
            'email' => $request->email,
            'photo' => $file,
            'password' => $request->password
        ]);
        $data->save();
        return redirect('admin/user');

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
        $user = User::find($id);
        return view('user.edit',compact('user'));
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
        //dd($request);
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::find($id);
        if(isset($request->photo)){
            $file = $request->file('photo')->store('images/users');
        }else{
            $file = $user->photo;
        }
        if($request->password ==! null){
            $password = $request->password;
        }else{
            $password = $user->password;
        }

        $user->update([
            'firsname' =>$request->firsname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'username' => $request->username,
            'email' => $request->email,
            'photo' => $file,
            'password' => $password
        ]);
        return redirect('admin/user');
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
