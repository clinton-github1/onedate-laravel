

@extends('layouts/eng.header')

@section('content')
<div class="content">
 
    <div class="tell-othrs"><a href="{!! url('tell-others') !!}" class="pg-links">Tell Others</a></div>
    The last 500 signatures are displayed<br><br>
    
    
    <div class="sig-tables">
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CITY</th>
            <th>COUNTRY</th>
        </tr>
        
        
@foreach ($signatures as $sig)
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
@include('layouts/eng.footer')

@endsection
