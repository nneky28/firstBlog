{{-- 
@include('layout.nav')
@section('content')
{{-- <h1>{{$title}}</h1>
  @if (count($services)>0)
      <ul class="list-group ms-3 p-3">
        @foreach ($services as $service)
           <li class="list-group-item"> {{$service}} </li>
           @endforeach
          </ul> --}}
        {{-- @endif   --}}
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
           {{-- bootstrap linkl --}}
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
           {{-- font awesome --}}
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        
          <title>blog</title>
          <style>
            *{
              padding: 0;
              margin: 0;
              box-sizing: border-box;
            }
          .container{
            background-image:linear-gradient(hsla(96, 98%, 59%, 0.6), rgba(0, 0, 0, 0.6)),
             url(images/3.jpg);
            max-width: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            transition: 5s;
            overflow-x: hidden;
            height: 40vh;
            overflow-y: hidden;
            }
            .nav {
            justify-content: end;
            padding: 30px 100px;
            font-family: cursive;
              }
          .nav,
           li,
           a {
            text-decoration: none;
            color: #fff;
             }
           li,a:hover {
          transform: translateY(-3px);
          padding: 3px 20px;
          box-shadow: 0 5px 30px yellowgreen;
          }
           a:hover{
          color: #fff;
           }
            .text {
              text-transform: uppercase;
              font-family: monospace;
              font-weight: bold;
              font-size: 20px;
               color: #fff;
               display: flex;
               padding:30px;
               margin-top: 35px;
              } 
              .story{
                text-align: center;
                text-transform: uppercase;
                font-family: sans-serif;
                margin-top: 70px;
                font-weight: bold;
               
                color: yellowgreen;
              } 
              .num{
                text-align: center;
                margin-top: 20px;
                text-transform: capitalize;
                font-weight: bold;
              }
              .nub{
                padding: 25px;
                margin-left: 5px;
               
              }
              .card{
                box-shadow: 1px 1px 1px 1px #eee;
                margin-bottom: 50px;
              }
              #button1{
                padding: 7px 5px;
                color: black;
                background-color: yellowgreen;
                border: 1px solid #eee;
                width: 50%;
                margin-left: 160px;
                margin-bottom: 20px;
          
              }
              
              .box{
                width: 60%;
                margin-left: 250px;
                background-color: #eee;
                margin-top:30px;
              }
              .inner-box{
                padding: 30px;
              }
        
              .hold{
                box-sizing: border-box;
                width: 100%;
                padding: 7px;
                margin-top: 5px;
                margin-bottom: 14px;
                border-radius: 4px;
                border: none;
              }
              h2{
                text-align: center;
                padding-top: 10px;
                text-transform: uppercase;
                color: gray;
              }
              .container1{
                margin-top: 60px;
                background-color: black;
               
              }
              .hnn{
                color: yellowgreen;
               
              }
              .holla{
                padding:5px 30px;
                margin-left:300px;
                margin-top: 10px;
                border: 1px solid #eee;
                color: #fff;
                background-color: black;
                border-radius: 2em;
              }
              .card{
                max-height:90%;
            
              }
              .name{
                margin-left: 10px;
              color: red;
              }
              #btnnn{
                padding: 7px 10px;
                width: 30%;
                background-color: yellowgreen;
                border: 1px solid #eee;
                margin-left: 160px;
                margin-bottom: 20px;
                border-radius: 2em;
              }
             
          </style>
        </head>
        <body>
          <div class="container">
            <nav>
              <ul class="nav">
                <li><a href="/index">Home</a></li> 
                <li><a href="/users">About</a></li>
                <li><a href="/blog">Blogs</a></li>
               </ul>
             </nav>
             <div class="text">
                <h4 class="text">Read...</h4>
                <h4 class="text">Discover...</h4>
                <h4 class="text">Shop...</h4>
             </div>
          </div>
          {{-- looping starts  --}}
            <h2 class="story">popular stories</h2>
        
       
       
 <div class="row mt-5 mb-2">

          @foreach ($allblog as $item)
          <div class="col-lg-6">
            <div class="card ms-5 me-5">
              <h5 class="num">{{$item->blog_title}}</h5>
              <h6 class="name"><i class="far fa-user" style="margin-left: weight:200%;color:black !important;"></i>  By: {{$item->author}} <br><br> {{$item->created_at}}</h6>
              <h2 class="author">{{$item->name}}</h2>
              <p class="nub">{{substr($item->content, 0, 100)}}...</p>
              <button id="btnnn" style="" ><a href="/blog">Read More</a></button> 
          </div>
        </div>
        @endforeach
          {{-- <div class="col-lg-6">
              <div class="card me-5">
                <h5 class="num">beauty</h5>
              <p class="nub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repudiandae nesciunt consectetur cwqq</p>
              <button class="button1"><a href="">Read More</a></button>
            </div>
         </div> --}}
   </div>
        {{-- looping ends  --}}
        

        {{-- user form starts --}}
        <div class="container1 mt-5">
          <section>
            <h2 class="hnn">Contribute</h2>
            @include('flash')
            <form action=""method="POST" class="box" enctype="multipart/form-data">
              @csrf
              <div class="inner-box">
              <div class="">
                <select name="author" id="author">
                  <option value="" class="hold">Choose an Author</option>
                  @foreach ($alluser as $author)
                  <option value="{{$author->name}}">{{$author->name}}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="name" class="hold" placeholder="your Name">   --}}
              </div>
              <div class="last">
                <label for="">Blog Title:</label>
                  <input type="text" name="title" class="hold"placeholder="title"><br>
              </div>
              <div class="last">
                <textarea name="content" id="" cols="97" rows="10"  placeholder="Tell a story...."></textarea><br>
              </div>
              <button type="submit"name="submit" class="holla" >submit</button>
            </form>
          </div>
        </section>
        </body>
        </html>