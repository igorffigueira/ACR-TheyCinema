@extends('layouts.app')

@section('content')

<div id="slider">  
        <figure>  
        @foreach($movies as $movie)
        <li><a href="movieinfo/{{ $movie-> IdMovie }}"><img src= {{$movie -> UrlMovie}} ></a></li>
        @endforeach  
        </figure>        
    </div>
</div>  
<br>


<br>

<div class="listMovie1">
<h1>Posters</h1>
<ul>
    @foreach($movies as $movie)
    <li>
        <a href="movieinfo/{{ $movie-> IdMovie }}"><img src= {{$movie -> UrlMovie}} ></a>
        <a  class="h_title" href="movieinfo/{{ $movie-> IdMovie }}"> {{$movie -> TitleMovie}}</a>
        <br><br><br><br><br>  
    </li>
    @endforeach

</ul>
</div>
      
        
<div >
    <div id="showMovies" class = "row"></div>
</div>

@endsection