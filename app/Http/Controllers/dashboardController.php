<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
class dashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = resource_path('views');
        $folder = $request->folder;
        $path = $path.'/'.$folder.'/';
        // dd($path);
        if(!File::exists($path)) {        
            File::makeDirectory($path);
            File::put($path.'index.blade.php',"@extends('dashboard.index')\n@section('content')\n@endsection");
            File::put($path.'add.blade.php',"@extends('dashboard.index')\n@section('content')\n@endsection");
            File::put($path.'update.blade.php',"@extends('dashboard.index')\n@section('content')\n@endsection");
            return view('dashboard.add')->with('success','Folder created sucessfully');
        }
        else{
            return view('dashboard.add')->with('error','Folder already exsist !');
        }
        dd($request->all());
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
        //
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
        //
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
