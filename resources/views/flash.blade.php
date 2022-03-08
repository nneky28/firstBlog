@if ($message = Session::get('success'))
<div class="alert alert-success alert-block flash">
  <button type="button" class="close" data-dismiss='alert'>X</button>
  <strong>{{$message}}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block flash">
  <button type="button" class="close" data-dismiss='alert'>X</button>
  
</div>
@endif

@if ($errors -> any())
<div class="alert alert-danger alert-block flash">
<button type="button" class="close" data-dismiss='alert'>X</button> 
@foreach ($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach  
@endif