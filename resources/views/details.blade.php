@extends("layouts.layout")

@section("title", "Home")


@section("main")
    <div class="container mt-5 text-light">
      <h1>Titolo: {{ $post["title"] }}</h1>
      <h2>Autore: {{ $post["author"] }}</h2>
      <h4>Categoria: {{ $category["id"] }}</h4>
      <p>Slug: {{ $detail["slug"] }}</p>
      <h5>{{ $detail["description"]}}</h5>
    </div>

@endsection