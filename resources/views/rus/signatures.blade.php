

@extends('layouts/rus.header')

@section('content')
<div class="content">

    <div class="tell-othrs"><a href="{!! url('rus-tell-others') !!}" class="pg-links"> Расскажите другим</a></div>
    Последние 500 подписей<br><br>
    
   



		
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>Имя</th>
            <th>Город</th>
            <th>Страна</th>
        </tr>
        
        
@foreach ($sig_rus as $sig)
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
@include('layouts/rus.footer')
@endsection