@extends("layouts.layout")

@section("title", "Home")



@section("main")
<div class="row">
        <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-center ">
    @foreach($data as $post)
    <div class="card d-flex bg-dark border-success rounded-0 flex-column align-items-center" style="width: 20rem; height:15rem;">
 
    <div class="card-body text-light d-flex flex-column justify-content-around align-items-center">
    <h5 class="card-title mb-2 text-center">{{ $post->title }}</h5>
    <h6 class="card-title mb-2">di {{ $post->author }}</h6>
    
    <a href="{{ route("boolpress.show",$post->id) }}" class="btn btn-success">Leggi l'articolo</a>
  </div>
</div>
@endforeach
</div>
</div>
@endsection