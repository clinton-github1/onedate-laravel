

@extends('layouts/dan.header')

@section('content')
<div class="content">

    <div class="tell-othrs"><a href="{!! url('dan-tell-others') !!}" class="pg-links">Fortæl andre</a></div>
    De seneste 500 underskrifter er vist<br><br>
    
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Navn</th>
            <th>By</th>
            <th>Land</th>
        </tr>
        
        
@foreach ($sig_dan as $sig)
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
@include('layouts/dan.footer')
@endsection