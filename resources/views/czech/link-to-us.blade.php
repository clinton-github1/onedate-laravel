@extends('layouts/czech.header')

@section('content')
<div class="content">

<section class="link-to-us">

    <h1>Spojte se s námi</h1>
    <p>Prosím, využijte jedno z následujících spojení pro kontakt s námi (obrázek si zkopírujte do svého vlastního serveru).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('cz-index') !!}" class="pg-links"><img src="{URL::assetimages/onedate.jpg') }}" alt="Hlasujte pro společné slavení Velikonoc všichni v jednom termínu"></a></div>
        <p><a href="{!! url('cz-index') !!}" class="pg-links">OneDate.org - Hlasujte pro společné slavení Velikonoc všichni v jednom termínu</a></p>
            <p>Učiňte malý krůček vpřed <a href="{!! url('cz-index') !!}" class="pg-links"> Křesťanská jednota.</a>.  Hlasujte pro společné slavení Velikonoc všichni v jednom termínu.</p>
        
        <p> Webová petice k <a href="{!! url('cz-index') !!}" class="pg-links"> jednotné datum Velikonoc.</a>.</p>
    
    </div>


</section>
@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection