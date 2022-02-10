@extends('layout')

@section('body')
  <header>
    <h1>Create product</h1>
  </header>  
  <main>
    <form action="{{route("comics.store")}}" method="post">
      @csrf
      <div>
        <input type="text" placeholder="Title" name="title">
      </div>
      <div>
        <textarea name="description" cols="30" rows="10" placeholder="Insert description"></textarea>
      </div>
      <div>
        <input type="text" placeholder="Thumb" name="thumb">
      </div>
      <div>
        <input type="number" placeholder="Price" name="price">
      </div>
      <div>
        <input type="text" placeholder="Series" name="series">
      </div>
      <div>
        <input type="date" placeholder="Sale Date" name="sale_date">
      </div>
      <div>
        <input type="text" placeholder="Type" name="type">
      </div>
      <div>
        <button type="submit">Create</button>
      </div>
    </form>
  </main>
@endsection


