<head>
    <style>
form {
    font-size: 50px;
}
input[type=text], textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  background-image: url('/images/textarea.jpg');
font-color:green;
font-style: italic;
  font-size:15px;
}
input[type=text],select{
    width: 15%;
    background-color:beige;
    padding: 10px;
}
input[type=submit]{
    width:30%;
    padding:20px;
    position:relative;
    bottom:-300px;
    left:100px;
    background-color:beige;
    font-size: 20px;
    font-color:black;
}
input[type=submit],value{
    

}
    </style>
    
@extends('components.layout')
@section('content')
<form action="/page4" >
  
    <label for="topicscope">CHOOSE A TOPIC SCOPE</label>
    <select id="topicscope" name="topicscope">
    <option value="fashion" >FASHION</option>
      <option value="food">FOOD</option>
     
    </select>
    <input type="submit" value="SUBMIT FOR ANALYSIS">
    
  </form>

  @endsection

