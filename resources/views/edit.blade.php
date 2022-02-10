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
        <input type="text" placeholder="Title" name="title" value="{{$comic -> title}}">
      </div>
      <div>
        <textarea name="description" cols="30" rows="10" placeholder="Insert description">{{$comic -> description}}</textarea>
      </div>
      <div>
        <input type="text" placeholder="Thumb" name="thumb"  value="{{$comic -> thumb}}">
      </div>
      <div>
        <input type="number" placeholder="Price" name="price"  value="{{$comic -> price}}">
      </div>
      <div>
        <input type="text" placeholder="Series" name="series"  value="{{$comic -> series}}">
      </div>
      <div>
        <input type="date" placeholder="Sale Date" name="sale_date"  value="{{$comic -> sale_date}}">
      </div>
      <div>
        <input type="text" placeholder="Type" name="type"  value="{{$comic -> type}}">
      </div>
      <div>
        <button type="submit">Edit</button>
      </div>
    </form>
  </main>
@endsection


