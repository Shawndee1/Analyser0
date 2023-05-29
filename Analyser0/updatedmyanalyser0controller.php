<?php

namespace App\Http\Controllers;
use App\Models\Analyser0;
use App\Models\topicscope;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

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
    public function store(Request $request) 
    {
        
       $myanalyservalidator=$request->validate([
        'name'=>'required',
        'email'=>['required','email',Rule::unique('analyser0s','email')]
       ]
       );

    Analyser0::create($myanalyservalidator);

    return  redirect('/page2')->with('message','Welcome to analyser0 ');
     
    
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
    function session(Request $request){
        $data=$request->input();
        $request->session()->put('session1',$data['name']);
        $request->session()->put('session2',$data['name']);


    return session('session1');
    
        

    }
    function session2(Request $request){
        $data=$request->input();
        $request->session()->put('session2',$data['name']);


    return session('session2');
    
        

    }
    
}
