@extends('layouts/ita.header')

@section('content')
<div class="content">
    



<section class="link-to-us">

    <h1>Collega il tuo sito al nostro</h1>
    <p>Usa uno dei link qui sotto per collegarti a noi (Copia le immagini sul tuo server).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('ita-index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('ita-index') !!}" class="pg-links">OneDate.org - Vota perché si celebri la Festa di Pasqua tutti alla stessa data</a></p>
            <p>Fai un piccolo passo verso <a href="{!! url('ita-index') !!}" class="pg-links"> l’Unità dei Cristiani.</a>. Vota perché si celebri la Festa di Pasqua tutti alla stessa data.</p>
        
        <p> Petizione on line per <a href="{!! url('ita-index') !!}" class="pg-links"> unire la data di Pasqua.</a>.</p>
    
    </div>


</section>


</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection