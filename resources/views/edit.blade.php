@extends('layout')

@section('body')
  <header>
    <h1>Edit {{$comic -> id}}</h1>
  </header>  
  <main>
    <form action="{{route("comics.update", $comic -> id)}}" method="post">
      @csrf
      @method("put")
      <div>
        <input type="text" placeholder="Title" name="title" class="@error("title") is-invalid @enderror" value="{{old("title") ? old("title") : $comic -> title}}">
      </div>
      @error('title')
        <div>{{$message}}</div>
      @enderror
      <div>
        <textarea name="description" cols="30" rows="10" placeholder="Insert description">{{old("description") ? old("description") : $comic -> description}}</textarea>
      </div>
      @error('description')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Thumb" name="thumb" class="@error("thumb") is-invalid @enderror" value="{{old("thumb") ? old("thumb") : $comic -> thumb}}">
      </div>
      @error('thumb')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="number" placeholder="Price" name="price" class="@error("price") is-invalid @enderror" value="{{old("price") ? old("price") : $comic -> price}}">
      </div>
      @error('price')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Series" name="series" class="@error("text") is-invalid @enderror" value="{{old("series") ? old("series") : $comic -> series}}">
      </div>
      @error('series')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="date" placeholder="Sale Date" name="sale_date" class="@error("date") is-invalid @enderror" value="{{old("sale_date") ? old("sale_date") : $comic -> sale_date}}">
      </div>
      @error('sale_date')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Type" name="type" class="@error("type") is-invalid @enderror" value="{{old("type") ? old("type") : $comic -> type}}">
      </div>
      @error('type')
      <div>{{$message}}</div>
      @enderror
      <div>
        <button type="submit">Edit</button>
      </div>
    </form>
  </main>
@endsection


