<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
        return view('user.index', compact('users'));
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
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        User::create($request->post());

        return redirect()->route('user.index')->with('success','users has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function show(User $users)
    {
        return view('user.show',compact('users'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function edit(User $users)
    {
        return view('user.edit',compact('users'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $users)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        $users->fill($request->post())->save();

        return redirect()->route('user.index')->with('success','users Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('users.index')->with('success','users has been deleted successfully');
    }
}