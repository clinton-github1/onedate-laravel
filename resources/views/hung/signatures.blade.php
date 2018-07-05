

@extends('layouts/hung.header')

@section('content')
<div class="content">
  
    <div class="tell-othrs"><a href="{!! url('hung-tell-others') !!}" class="pg-links">Add tovább</a></div>
   A legutóbbi 500 aláírás.:<br><br>
    
		
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Név</th>
            <th>Város/Helység</th>
            <th>Ország</th>
        </tr>
        
        
@foreach ($sig_hung as $sig)
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
@include('layouts/hung.footer')
@endsection