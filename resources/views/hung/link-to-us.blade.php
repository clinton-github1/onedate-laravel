@extends('layouts/hung.header')

@section('content')
<div class="content">
    

<section class="link-to-us">

    <h1>Linkeld ezt az oldalt</h1>
    <p>Kérünk, használjátok az alábbi link-opciók egyikét, hogy így linkelhessétek ezt az oldalt a tiétekre (a képeket másoljátok a saját szerveretekre).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('hung-index') !!}" class="pg-links"><img src="{{ URL::asset('images/hung-onedate%20.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('hung-index') !!}" class="pg-links">OneDate.org - Írd alá, hogy egy időpontban ünnepeljük a Húsvétot</a></p>
            <p>Tégy egy kis lépést <a href="{!! url('hung-index') !!}" class="pg-links"> Keresztények Egységéért</a>.  Írd alá, hogy egy időpontban ünnepeljük a Húsvétot.</p>
        
        <p> Internetes petíció <a href="{!! url('hung-index') !!}" class="pg-links"> a Húsvét közös dátumáért.</a>.</p>
    
    </div>


</section>


</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection