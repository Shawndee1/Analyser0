@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>&</title>
        <style> footer{ 
            position: relative; 
        bottom: -400px;
           left: 300px;
          font-size: 80px;}
           div.row{
            font-size: 65px;
           }
           div.mystyle{
            font-size: 60px;
           }
           div.container{
            text-decoration-style: wavy;
           }
           </style>
<form action="/registration/{name}/{email}" >
    <div class="container">
        <form action="cd ">
          <div class="row">
            <div class="mystyle">
              <label for="names">Enter your Names</label>
            </div>
            <div class="col-75">
              <input type="text" id="name" name="name" placeholder="Your name..." style="width: 50%" ,style="height: 50%">
            </div>
          </div>
          <div class="container">
            <form action="">
              <div class="row">
                <div class="mystyle">
                  <label for="email">Enter your Email</label>
                </div>
                <div class="col-75">
                  <input type="text" id="email" name="email" placeholder="Your email..?" style="width: 50%">
                </div>
              </div>
            

<footer>
    <div class="row">
        <input type="submit"
 value="CONFIRM FORM SUBMISSION">    </div>

</footer>


        
    
</form>


  


@endsection
