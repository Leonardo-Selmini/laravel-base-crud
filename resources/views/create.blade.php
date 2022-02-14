@extends('layout')

@section('body')
  <header>
    <h1>Create product</h1>
  </header>  
  <main>
    <form action="{{route("comics.store")}}" method="post">
      @csrf
      <div>
        <input type="text" placeholder="Title" name="title" class="@error("title") is-invalid @enderror" value="{{old("title")}}">
      </div>
      @error('title')
        <div>{{$message}}</div>
      @enderror
      <div>
        <textarea name="description" cols="30" rows="10" placeholder="Insert description"></textarea>
      </div>
      @error('description')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Thumb" name="thumb" class="@error("thumb") is-invalid @enderror" value="{{old("thumb")}}">
      </div>
      @error('thumb')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="number" placeholder="Price" name="price" class="@error("price") is-invalid @enderror" value="{{old("price")}}">
      </div>
      @error('price')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Series" name="series" class="@error("text") is-invalid @enderror" value="{{old("series")}}">
      </div>
      @error('series')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="date" placeholder="Sale Date" name="sale_date" class="@error("date") is-invalid @enderror" value="{{old("sale_date")}}">
      </div>
      @error('sale_date')
      <div>{{$message}}</div>
      @enderror
      <div>
        <input type="text" placeholder="Type" name="type" class="@error("type") is-invalid @enderror" value="{{old("type")}}">
      </div>
      @error('type')
      <div>{{$message}}</div>
      @enderror
      <div>
        <button type="submit">Create</button>
      </div>
    </form>
  </main>
@endsection


