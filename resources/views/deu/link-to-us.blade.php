@extends('layouts/deu.header')

@section('content')
<div class="content">
<section class="link-to-us">

    <h1>Verlinkung auf diese Webseite</h1>
    <p>Bitte benutzt eine der untenstehenden Link-Optionen um auf Eurer Internetseite einen Link auf unsere Webseite einzurichten (Bitte kopiert die Bilder auf euren eigenen Server). .</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('deu-index') !!}" class="pg-links"><img src="{{URL::asset('images/deu-onedate%20.jpg') " alt="home page link image"></a></div>
        <p><a href="{!! url('deu-index') !!}" class="pg-links">OneDate.org - Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes</a></p>
            <p>Mach einen kleinen Schritt in Richtung <a href="{!! url('deu-index') !!}" class="pg-links"> Einheit der Christen.</a>.  Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes.</p>
        
        <p> Internet-Petition für die <a href="{{!! url('deu-index') !!}" class="pg-links"> Vereinheitlichung des Osterdatums.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection