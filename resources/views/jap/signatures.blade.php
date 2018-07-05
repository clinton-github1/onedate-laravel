
@extends('layouts/jap.header')

@section('content')
<div class="content">
 
    <div class="tell-othrs"><a href="{!! url('jap-tell-others') !!}" class="pg-links">他の人に知らせる</a></div>
    最近の署名500件を表示します。<br><br>
    
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>氏名</th>
            <th>市町村名</th>
            <th>国名</th>
        </tr>
        
        
@foreach ($sig_japs as $sig)
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
@include('layouts/ita.footer')
@endsection