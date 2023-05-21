<?php

namespace App\Http\Controllers;
use App\Models\Analyser0;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\topicscope;

class myanalyser0controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request) :RedirectResponse
    {
        $analyser0 = new Analyser0;
        $analyser0->name=$request->name;
        $analyser0->email=$request->email;
        
        $analyser0->save();
       return redirect('/topicscope/{name}/{email}');
    
     
    
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
       // $analyser0 = Analyser0::find($id);
       // $analyser0->topicscope=$request->topicscope;
       // $analyser0->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
