

@extends('layouts/ned.header')

@section('content')
<div class="content">

<div class="tell-othrs"><a href="{!! url('ned-tell-others') !!}" class="pg-links"> Vertel aan anderen</a></div>
    de laaste 500 handtekeningen worden getoond<br><br>
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Naam</th>
            <th>Stad</th>
            <th>Land</th>
        </tr>
        
        
@foreach ($sig_ned as $sig)
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
@include('layouts/ned.footer')
@endsection