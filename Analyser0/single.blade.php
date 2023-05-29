@extends('components.layout')
@section('content')
<head>
    <style>* {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    .header {
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(54, 54, 54, 0.7), rgba(43, 43, 43, 0.7)), url(images/bmw.jpg);
        background-position: center;
        background-size: cover;
        position: relative;
        font-size: 70px;
    }
    .header h1{
        font-size: 90px;
        position: relative;
        right: -300px;
    }
    nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;
    }
    
    nav img {
        width: 100px;
    }
    
    .nav-links {
        flex: 1;
        text-align: right;
    }
    
    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }
    
    .nav-links ul li a {
        color: rgb(22, 132, 206);
        text-decoration: none;
        font-size: 13px;
    }
    
    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s;
    }
    
    .nav-links ul li:hover::after {
        width: 100%;
    }
    
    .text-box {
        width: 90%;
        color: rgb(13, 138, 33);
        position: absolute;
        top: 50% left 50% transform translate(-50%, -50%);
        text-align: center;
    }
    
    .text-box h1 {
        font-size: 90px;
        color: rgb(13, 180, 231);
    }
    
    .text-box p {
        margin: 10px 0 40px;
        font-size: 18px;
        color: rgb(11, 243, 69);
    }
    
    .hero-btn {
        display: inline-block;
        text-decoration: none;
        color: rgb(230, 226, 224);
        border: 1px solid rgb(230, 7, 18);
        padding: 12px 34px;
        font-size: 13px;
        background: transparent;
        position: relative;
        cursor: pointer;
    }
    
    .hero-btn:hover {
        border: 1px solid #14bdb5;
        background: #ee6f07;
        transition: 1s;
    }
    
    nav .fa {
        display: none;
    }
    
    @media(max-width: 700px) {
        .text-box h1 {
            font-size: 22px;
        }
        .nav-links ul li {
            display: block;
        }
        .nav-links {
            position: fixed;
            background: #0c0c0c;
            height: 100vh;
            width: 200px;
            top: 0;
            right: -200px;
            text-align: left;
            z-index: 2;
            transition: 1s;
        }
        nav .fa {
            display: block;
            color: rgb(231, 26, 152);
            margin: 10px;
            font-size: 22px;
            cursor: pointer;
        }
        .nav-links ul {
            padding: 30px;
        }
    }
    /*----- course -----*/
    
    .course {
        width: 80%;
        margin: auto;
        text-align: center;
    }
    
    h1 {
        font-size: 36px;
        font-weight: 600;
    }
    
    p {
        color: #10d842;
        font-size: 14px;
        font-weight: 300;
        line-height: 22px;
        padding: 10px;
    }
    
    .row {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
    }
    
    .course-col {
        flex-basis: 31%;
        background: #067c85;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
    }
    
    h3 {
        text-align: center;
        font-weight: 600;
        margin: 10px 0;
    }
    
    .course-col:hover {
        box-shadow: 0 0 20px 0px rgba(12, 12, 12, 0.7)
    }
    
    @media(max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }
    /*------ campus ------*/
    
    .containerss{
        position: relative;
        width: 1400px;
        height: 200px;
        display: grid;
        grid-template-columns: repeat(auto-fit , minmax(250px,1fr));
        grid-gap: 50px;
        padding: 100px;
        padding-bottom: 300px;
    }
    
    .containerss .card{
        width: 100%;
        background: white;
    }
    
    .containerss .card .imgbox{
        position: relative;
        width: 100%;
        height: 310px;
        overflow: hidden;
    }
    
    .containerss .card .imgbox img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s ease-in-out;
        transform-origin: right;
    }
    
    .containerss .card:hover .imgbox img{
        transform: scale(1.5);
    }
    
    .action{
        position: absolute;
        top: 10px;
        right: 10px;
    }
    
    .action li{
        position: relative;
        list-style: none;
        width: 40px;
        height: 40px;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 4px;
        cursor: pointer;
        transition: transform 0.5s;
        transform:translateX(60px) ;
    }
    
    .action li:nth-child(2){
        transition-delay: 0.15s;
    }
    
    .action li:nth-child(3){
        transition-delay: 0.3s;
    }
    
    .container .card:hover .action li{
        transform:translateX(0px) ;
    }
    
    .action li:hover{
        background: rgb(240, 36, 70);
        color: white;
    }
    
    .action li span{
        position: absolute;
        right: 50px;
        top: 50%;
        transform: translateY(-50%) translateX(-20px);
        white-space: nowrap;
        padding: 4px 60px;
        background: white;
        color: black;
        font-weight: 500;
        font-size: 12px;
        border-radius: 4px;
        pointer-events: none;
        opacity: 0;
        transition: 0.5s;
    }
    
    .action li:hover span{
        transform: translateY(-50%) translateX(0px);
        opacity: 1 ;
    }
    
    .action li span::before{
        content: '';
        position: absolute;
        top: 50%;
        right: -4px;
        width: 8px;
        height: 8px;
        background: white;
        transform: translateY(-50%) rotate(45deg);
    }
    
    .containerss .card .content{
        padding: 30px;
    }
    
    .containerss .card .content .productname h3{
        font-size: 30px;
        font-weight: 500;
        color: black;
        margin: 5px 0;
        font-style: bold;
    }
    
    .containerss .card .content .price_rating{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .containerss .card .content .price_rating h2{
        font-size: 20px;
        color: red;
        font-weight: 500;
    }
    
    .containerss .card .content .rating .fa{
        color: yellow;
        cursor: pointer;
    }
    
    .containerss .card .content .rating .fa.grey{
        color: grey;
    }
    
    /*------ testimonials ------*/
    
    .testimonials{
        width: 80%;
        margin: auto;
        padding-top: 100px;
        text-align: center;
    }
    .testimonial-col{
        flex-basis: 44%;
        border-radius: 10px;
        margin-bottom: 5%;
        text-align: left;
        background: #054b7a;
        padding: 25px;
        cursor: pointer;
        display: flex;
    }
    .testimonial-col img{
        height: 40px;
        margin-left: 5px;
        margin-right: 30px;
        border-radius: 50%;
    }
    .testimonial-col p{
        padding: 0;
    }
    .testimonial-col h3{
        margin-top: 15px;
        text-align: left;
    }
    .testimonial-col .fa{
        color: #df19b4;
    }
    @media(max-width: 700px){
        .testimonial-col img{
            margin-left: 0px;
            margin-right: 15px;
        }
    }
    
    /*------ Call To Action ------*/
    
    .cta{
        margin: 100px auto;
        width: 80%;
        background-image: linear-gradient(rgba(51, 50, 50, 0.7),rgba(49, 48, 48, 0.7)),url();
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
    }
    .cta h1{
        color: #df19b4;
        margin-bottom: 40px;
        padding: 0;
    }
    @media(max-width: 700px){
        .cta h1{
            font-size: 24px;
    
        }
    }
    
    /*------ Footer ------*/
    
    .Footer{
        width: 100%;
        text-align: center;
        padding: 30px 0;
    }
    .Footer h4{
        margin-bottom: 25px;
        margin-top: 20px;
        font-weight: 600;
    }
    .icons .fa{
        color: #df19b4;
        margin: 0 13px;
        cursor: pointer;
        padding: 18px 0;
    }
    .fa-heart-o{
        color: #0c0c0c;
    }
    
    
    /*------- about us page ------*/
    
    .sub-header{
        height: 50vh;
        width: 100%;
        background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url();
        background-position: center;
        background-size: cover;
        text-align: center;
         color: #fff;
    }
    .sub-header h1{
        margin-top: 100px;
    }
    
    .about-us{
        width: 80%;
        margin: auto;
        padding-top: 80px;
        padding-bottom: 50px;
    }
    .about-col{
        flex-basis: 48%;
        padding: 30px 2px;
    }
    .about-col img{
        width: 100%;
    }
    .about-col h1{
        padding-top: 0;
    }
    .about-col p{
        padding: 15px 0 25px;
    }
    
    .red-btn{
        border: 1px solid #f520ae;
        background: transparent;
        color: #0a0a0a;
    }
    .red-btn :hover{
        color: rgb(236, 230, 230);
        
    }
    
    /*-------blog-content------*/
    
    .blog-content{
        width: 80%;
        margin: auto;
        padding: 60px 0;
    }
    .blog-left{
        flex-basis: 65%;
    }
    .blog-left img{
        width: 100%;
    }
    .blog-left h2{
        color: rgb(226, 60, 9);
        font-weight: 600;
        margin: 30px 0;
    }
    .blog-left p{
        color: #0a0a0a;
        padding: 0;
    }
    .blog-right{
        flex-basis: 32%;
    }
    .blog-right h3{
        background: #f44336;
        color: #fff;
        padding: 7px 0;
        font-size: 16px;
        margin-bottom: 20px;
    }
    .blog-right div{
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #555;
        padding: 8px;
        box-sizing: border-box;
    }
    
    .comment-box{
        border: 1px solid #ccc;
        margin: 50px 0;
        padding: 10px 20px;
    }
    .comment-box h3{
        text-align: left;
    }
    .comment-form input, .comment-form textarea{
        width: 100%;
        padding: 10px;
        margin: 15px 0;
        box-sizing: border-box;
        border: none;
        outline: none;
        background: #f0f0f0;
    }
    .comment-form button{
        margin: 10px 0;
    }
    
    @media(max-width:700px){
        .sub-header h1{
            font-size: 24px;
        }
    }
    
    .contact-us{
        width: 80%;
        margin: auto;
    }
    .contact-col{
        flex-basis: 48%;
        margin-bottom: auto;
    }
    .contact-col div{
        display: flex;
        align-items: center;
        margin: 40px;
    }
    .contact-col div .fa{
        font-size: 28px;
        color: #f44336;
        margin: 10px;
        margin-right: 30px;
    }
    .contact-col div p{
        padding: 0;
        color: #07c201;
    }
    .contact-col div h5{
        font-size: 20px;
        margin-bottom: 5px;
        color: rgb(20, 20, 20);
        font-weight: 400;
    }
    .contact-col input, .contact-col textarea{
        width: 100%;
        padding: 15px;
        margin-bottom: 17px;
        outline: none;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    
    .location{
        width: 80%;
        margin: auto;
        padding: 80px 0;
    }
    .location iframe{
        width: 100%;
    }
    //adjustment//
section.body.div.h1{
    font-size:90px;
}
    </style>
</head>

<div class="containerss">


 <div class="card">
     <div class="imgbox">

         <img src="{{$page3->images}}">

         <ul class="action">
             <li>
                 <i class="fa fa-heart" aria-hidden="true"></i>
                 <span>Add to Wishlist</span>
             </li>

             <li>
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                 <span>Add to Cart</span>
             </li>

             <li>
                 <i class="fa fa-eye" aria-hidden="true"></i>
                 <span>View Details</span>
             </li>
         </ul>

     </div>

     <div class="content">

         <div class="productname">
             <h3><a href="/{{$page3->id}}">{{$page3->topicscope}}</a></h3>
         </div>

         <div class="price_rating">
             <h2> ANALYSER 0 PICKED-{{$page3->description}}</h2>
         </div>
         
         

     </div>
 </div>


     </div>
    
     @endsection