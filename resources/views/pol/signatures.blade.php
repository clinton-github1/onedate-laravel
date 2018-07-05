
@extends('layouts/pol.header')

@section('content')
<div class="content">

    <div class="tell-othrs"><a href="{!! url('pol-tell-others') !!}" class="pg-links"> Powiedz innym</a></div>
    Wyświetlanych jest ostatnich 500 podpisów<br><br>
    
   



		
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Imię i nazwisko</th>
            <th>Miejscowość</th>
            <th>Kraj</th>
        </tr>
        
        
@foreach ($sig_pol as $sig)
        <tr>
            <td>{{ $sig->id }}</td>
            <td>{{ $sig->Name }}</td>
            <td>{{ $sig->City }}</td>
            <td>{{ $sig->Country }}</td>
        </tr>
@endforeach
       
    </table>
    </div> 

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection