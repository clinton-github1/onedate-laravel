

@extends('layouts/chin.header')

@section('content')
<div class="content">

<div class="tell-othrs"><a href="{!! url('ch-tell-others') !!}" class="pg-links">告訴其他人</a></div>
    前500名簽名者<br><br>
    
    			
    <div class="sig-tables">
    <table>
        <tr>
            <th></th>
            <th>姓名</th>
            <th>城市</th>
            <th>國家</th>
        </tr>
        
        
@foreach ($sig_chin as $sig)
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
@include('layouts/chin.footer')
@endsection