@extends('layouts/deu.header')

@section('content')
<div class="content">

  <div class="tell-othrs"><a href="{!! url('deu-tell-others') !!}" class="pg-links">Andern Weitersagen

</a></div>
    Die letzten 500 gegebenen Unterschriften werden angezeigt<br><br>
    

		
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Stadt/Ort</th>
            <th>Land</th>
        </tr>
        
        
@foreach ($sig_deu as $sig)
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
@include('layouts/deu.footer')
@endsection