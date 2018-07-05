

@extends('layouts/esp.header')
@section('content')
<div class="content">
    
    <div class="tell-othrs"><a href="{!! url('esp-tell-others') !!}" class="pg-links"> Cuéntele a otros</a></div>
    Las últimas 500 firmas son mostradas<br><br>
    


		
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>País</th>
        </tr>
        
        
@foreach ($sig_esp as $sig)
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
@include('layouts/esp.footer')
@endsection