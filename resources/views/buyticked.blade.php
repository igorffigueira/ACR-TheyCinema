@extends('layouts.app')
@section('content')
<div class="container30">
<h2 class="bt_title">Choose your seat</h2>
<br>
<div>
    @foreach($position as $link)
        <table class="bt_table">
            <tr>
                <th ><center><h4>Front</h4></center></th>
                <td><button id = 'seat1' href="javascript:void(0)" value ="{{ $link->a1 }}" onclick = "reserve1({{ $link->salas_id }})"> Open Seat - 1 </button></td>
                <td><button id = 'seat2' href="javascript:void(0)" value ="{{ $link->a2 }}" onclick = "reserve2({{ $link->salas_id }})"> Open Seat - 2 </button></td>
                <td><button id = 'seat3' href="javascript:void(0)" value ="{{ $link->a3 }}" onclick = "reserve3({{ $link->salas_id }})"> Open Seat - 3 </button></td>
            </tr>
            <tr>   
                <th ><center><h4>Center</h4></center></th>     
                <td><button id = 'seat4' href="javascript:void(0)" value ="{{ $link->b1 }}" onclick = "reserve4({{ $link->salas_id }})"> Open Seat - 4 </button></td>
                <td><button id = 'seat5' href="javascript:void(0)" value ="{{ $link->b2 }}" onclick = "reserve5({{ $link->salas_id }})"> Open Seat - 5 </button></td>
                <td><button id = 'seat6' href="javascript:void(0)" value ="{{ $link->b3 }}" onclick = "reserve6({{ $link->salas_id }})"> Open Seat - 6 </button></td>
            </tr>
            <tr>
                <th ><center><h4>Back</h4></center></th>
                <td><button id = 'seat7' href="javascript:void(0)" value ="{{ $link->c1 }}" onclick = "reserve7({{ $link->salas_id }})"> Open Seat - 7 </button></td>
                <td><button id = 'seat8' href="javascript:void(0)" value ="{{ $link->c2 }}" onclick = "reserve8({{ $link->salas_id }})"> Open Seat - 8 </button></td>
                <td><button id = 'seat9' href="javascript:void(0)" value ="{{ $link->c3 }}" onclick = "reserve9({{ $link->salas_id }})"> Open Seat - 9 </button></td>
            </tr>
            </table>
        <br><br>
    @endforeach
</div>
</div>
@endsection
@section('jscall')
<script type="text/javascript" src="{{ URL::asset('js/buyticketjs.js') }}"></script>
@endsection