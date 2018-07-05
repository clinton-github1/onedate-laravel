
@extends('layouts/fran.header')

@section('content')
<div class="content">
 
    <div class="tell-othrs"><a href="{!! url('fr-tell-others') !!}" class="pg-links"> Dites-le autour de vous</a></div>
    Voici les 500 plus récentes signatures :<br><br>
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Ville</th>
            <th>Pays</th>
        </tr>
        
        
@foreach ($sig_fran as $sig)
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
@include('layouts/fran.footer')
@endsection