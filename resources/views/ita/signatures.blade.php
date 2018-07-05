
@extends('layouts/ita.header')

@section('content')
<div class="content">
    
<div class="tell-othrs"><a href="{!! url('ita-tell-others') !!}" class="pg-links">Dillo ad Altri</a></div>
    Elenco delle ultime 500 firme<br><br>
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Città</th>
            <th>Paese</th>
        </tr>
        
        
@foreach ($sig_ita as $sig)
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
@include('layouts/ita.footer')
@endsection