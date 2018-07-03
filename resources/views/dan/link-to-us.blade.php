@extends('layouts/dan.header')

@section('content')
<div class="content">

    
<section class="link-to-us">

    <h1>Link til os</h1>
    <p>Vær venlig og brug et af de links her under for at linke til os (Vær venlig og kopier billederne til din egen server).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('dan-index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('dan-index') !!}" class="pg-links">OneDate.org - Underskriv appellen for at fejre påskefesten på én og samme dato</a></p>
            <p>Tag et lille skridt mod <a href="{!! url('dan-index') !!}" class="pg-links"> Kristen enhed</a>. Underskriv appellen for at fejre påskefesten på én og samme dato.</p>
        
        <p> Web side appel for <a href="{!! url('dan-index') !!}" class="pg-links"> enhed af påskedatoen.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection