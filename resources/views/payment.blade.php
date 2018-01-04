@extends('layouts.app')

@section('content')
<div class="container">
<br>
<div>
    <fieldset class="pb_fieldset">
        <h2>The price of the ticket is 6,00 euros (€) </h2>
        <h3> You can obtain your ticket in the balcony of the store </h3>
        <form action="{{ url('sendconfirmation')}}" method="post">
        {{ csrf_field()}}
            <br>
            <p>Card number:   (XXXXYYYYZZZZ)<br> 
                <input id="numerocartao"    name="numerocartao" type="text" placeholder="Card number">
            </p>
            <p>Expiration date:   (mmYY)<br> 
                <input id="datavalidade"    name="datavalidade" type="text" placeholder="Expiration date">
            </p>
            <p>Security code (CCV):   (XXXX)<br> 
                <input id="codigosegurança" name="codigosegurança" type="text" placeholder="Security code">
            </p>
            <button>Confirm payment</button>
            <br><br><br>
        </form>     
        <br>
    </fieldset>

</div>
</div>
@endsection