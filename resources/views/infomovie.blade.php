@extends('layouts.app')

@section('content')

    <div>
        <form name="FormMovieInfo">
            <input type="hidden" name="IdMovie" value="{{$IdMovie}}">
        </form>   
    </div>
    <div class="container">
        <div id="movieDetails"></div>
    </div>
    
@endsection

@section('jscall')
<script type="text/javascript" src="{{ URL::asset('js/infomoviejs.js') }}"></script>
@endsection

