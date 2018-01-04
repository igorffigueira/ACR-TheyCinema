@extends('layouts.app')

@section('content')
<div class="container">
    <p> <strong>This Website was create by: </strong> </p>
    <ul class="t_flex-container">
        <li class="t_flex-item">
            <p><b> Alejandro de Carvalho</b> </p>
            <p>alejandro@hotmail.com</p>
            <p> 2014813 </p>
            <img class="foto"src="/images/alejandro.jpg" >
        </li>
        <li class="t_flex-item">
            <p><b> André Figueira </b></p>
            <p>igorffigueira@gmail.com</p>
            <p> 2069113 </p>
            <img class="foto"src="/images/igor.jpg" >
        </li>
        <li class="t_flex-item">
            <p><b> David Aguiar </b></p>
            <p>daveaguiar26@gmail.com</p>
            <p> 2023612 </p>
            <img class="foto"src="/images/David.jpg" >    
        </li>
    </ul>
</div>
@endsection