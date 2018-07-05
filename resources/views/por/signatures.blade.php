
@extends('layouts/por.header')

@section('content')
<div class="content">

<div class="tell-othrs"><a href="{!! url('por-tell-others') !!}" class="pg-links">  Divulgue</a></div>
   Estas são as 500 últimas assinaturas<br><br>
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>País</th>
        </tr>
        
        
@foreach ($sig_por as $sig)
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
@include('layouts/por.footer')
@endsection