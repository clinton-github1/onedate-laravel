

@extends('layouts/czech.header')

@section('content')
<div class="content">

<div class="tell-othrs"><a href="{!! url('cz-tell-others') !!}" class="pg-links">Řekněte ostatním</a></div>
   Posledních 500 podpisů<br><br>
    
    			
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Jméno</th>
            <th>Město</th>
            <th>Země</th>
        </tr>
        
        
@foreach ($sig_cz as $sig)
        <tr>
            <td>{{ $sig->id }}</td>
            <td>{{ $sig->Name }}</td>
            <td>{{ $sig->City }}</td>
            <td>{{ $sig->Country }}</td>
        </tr>
@endforeach
       
    </table>
    </div> 
    
    @include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection