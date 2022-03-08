 <!-- css link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>sigup</title>
  <style type="text/css">
  .brand {
    background-color: yellowgreen!important;
  }
  .brand-text{
    color: yellowgreen !important;
    text-align: right;
    font-family: fantasy;
  }
form{
  max-width: 460px;
  margin: 20px auto;
  padding: 20px;
}
label{
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
}
h4{
  text-align: center;
  text-transform: uppercase;
  padding-top: 20px;
}
button,a{
  color: #000;
}
.butn{
  padding: 10px 25px;
  background-color: yellowgreen;
  color: #fff;
  border: 1px solid transparent;
}
.butn,a{
  text-decoration: none;
  color: #fff;
}
#fa{
 weight:100%;
}
.red-text{
  margin-top:-25px;
}
  </style>
</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0">
  <div class="container">
    <a href="#" class="brand-logo brand-text">PeaceBlog</a>
    <ul id="nav-mobile" class="right hide-on-small-and-down">
      <li><a href="" class="btn brand z-depth-0">UPDATE</a></li>

    </ul>
  </div>
  </nav>

{{-- form starts --}}
<h4>SignUp</h4>
<form action=""method="POST">
  {{-- @include('flash') --}}
  @csrf
  Email  <i class="fas fa-envelope-open-text" style="margin-left:350px; weight:200%"></i><input type="email" name="email"><br><br>
  <div class="red-text">@error('email'){{$message}}@enderror</div>

  password: <i class="fas fa-unlock-alt"style="margin-left:390px; weight:200%" ></i><input type="text" name="password"><br><br>
  <div class="red-text">@error('password'){{$message}}@enderror</div>

  Name:<i class="far fa-user" style="margin-left:390px; weight:200%"></i> <input type="text" name="name"><br><br>
  <div class="red-text">@error('name'){{$message}}@enderror</div>

  <button type="submit" name="submit" class="butn">SUBMIT</button>
</form>

  <footer class="section">
    <div class="center">
      copyright@ PeaceBlog 2021
    </div>
  </footer>