//MYANALYSERO ROUTES
           Route::get('/',function(){
            return view('analyser0.index',);
        })
        ;
       Route::post('/topicscope',[myanalyser0controller::class,'store']);
        Route::get('/page2',function(){
            return view('analyser0.topicscope',[
            ]);
        });
        
    
        Route::get('/page4',[mytopicscopecontroller::class,'index']);
        

        Route::get('/{id}',function($id){
            return view('analyser0.single',[
                'page3'=>page3::find($id)
            ]);
        });