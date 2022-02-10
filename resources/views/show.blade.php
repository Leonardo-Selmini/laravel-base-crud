@extends('layout')

@section('body')
<head>
  <p>Crea il tuo fumetto</p>
  <a href="{{route("comics.create")}}">
    <button>Crea</button>
  </a>
  <h1>{{$comic["title"]}}</h1>
</head>
<main>
  <ul>
    <li>
      <p>{{$comic["description"]}}</p>
    </li>
    <li>
      <img src="{{$comic["thumb"]}}" alt="immagine copertina">
    </li>
    <li>
      Prezzo: {{$comic["price"]}}€
    </li>
    <li>
      <p>{{$comic["series"]}}</p>
    </li>
    <li>
      <p>{{$comic["sale_date"]}}</p>
    </li>
    <li>
      <p>{{$comic["type"]}}</p>
    </li>
    <li>
      <a href="{{route("comics.index")}}">
        <button>Home</button>
      </a>
    </li>
  </ul>
</main>
@endsection