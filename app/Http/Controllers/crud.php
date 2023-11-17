<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;  // using the create data model

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abc=data::all();                                       //created new data model
        return view('read', compact('abc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $abc= new data;                                        //created new data model
        $abc-> name =$name;
        $abc-> password =$password;
        $abc-> save();                                         //to save the data model
        return redirect('read');
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
        $xyz = data::find($id);                                 //created new data model to find id
        return view('edit', compact('xyz'));
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
        $name = $request-> input('name');
        $password = $request-> input('password');
        $xyz= data::find($id);  
        $xyz-> name =$name;
        $xyz-> password =$password;
        $xyz-> save();
        return redirect('read');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xyz = data::find($id);
        $xyz-> delete();
        return redirect('read');
    }
}
