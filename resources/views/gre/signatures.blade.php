
@extends('layouts/gre.header')

@section('content')
<div class="content">
 
    <div class="tell-othrs"><a href="{!! url('gre-tell-others') !!}" class="pg-links">Ενημερώστε και άλλους</a></div>
    Παρατίθενται οι τελευταίες 500 υπογραφές<br><br>
    

    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Όνομα</th>
            <th>Πόλη</th>
            <th>Χώρα</th>
        </tr>
        
        
@foreach ($sig_gre as $sig)
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
@include('layouts/gre.footer')
@endsection