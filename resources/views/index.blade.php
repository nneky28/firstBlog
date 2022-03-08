
@extends('app')

@section('content')
<div class="container"> 
 <nav>
   <ul class="nav">
     <li><a href="">Home</a></li> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
     <li><a href="">About</a></li>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
     <li><a href="">Blogs</a></li>
    </ul>
  </nav>
 {{-- hero text  --}}
 <h2 class="text-box">PeaceBlog</h2>
<div class="row">
    <div class="heading-primary">
      <h4>You can be sad,upset, angry,<br> anxious,drained,overwhelmed,<br> unsure,afraid<br> and still be <strong>positive</strong></h4>
  </div>
  <div class="heading-primary-sub">
      <h5>improve your life and manifest your dreams<br>
        Are you worried for nothing?<br>
        keep an open mind......
      </h5>
  </div>
</div>
<button type="button" class="btn" ><a href="/users">Login In</a></button>



</div>

@endsection