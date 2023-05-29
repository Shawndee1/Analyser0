<?php

namespace App\Http\Controllers;

use App\Models\page3;
use App\Models\Analyser0;
use App\Models\topicscope;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class mytopicscopecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
       return view('analyser0.page3',[
            'page3'=>page3::latest()->filter(['page4?search'])->get()
        ]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
    //     $topic=new topicscope;
    //     $topic->name=$request->session()->get('session1');
    //    $topic->email=$request->session()->get('session2');
    //    $topic->topicscope=$request->topicscope;
    //    $topic->description=$request->description;
    //    $topic->save();
    //    return redirect('/page4');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
