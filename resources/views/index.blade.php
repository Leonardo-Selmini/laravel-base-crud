@extends('layout')

@section('body')
<head>
  <h1>Comics</h1>
  <a href="{{route("comics.create")}}">
  <button>Crea</button></a>
</head>
<main>
  <table>
    <thead>
      <th>Title</th>
      <th>Description</th>
      <th>Thumb</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale date</th>
      <th>Genre</th>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{$comic["title"]}}</td>
          <td>{{$comic["description"]}}</td>
          <td>{{$comic["thumb"]}}</td>
          <td>{{$comic["price"]}}</td>
          <td>{{$comic["series"]}}</td>
          <td>{{$comic["sale_date"]}}</td>
          <td>{{$comic["type"]}}</td>
          <td><a href="{{route("comics.show", $comic["id"])}}"><button>View</button></a></td>
          <td><a href="{{route("comics.edit", $comic["id"])}}"><button>Edit</button></a></td>
          <td>
            <form action="{{route("comics.destroy", $comic -> id)}}" method="post">
              @csrf
              @method("delete")
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection