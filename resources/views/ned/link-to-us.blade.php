@extends('layouts/ned.header')

@section('content')
<div class="content">

<section class="link-to-us">

    <h1>Maak verbinding met ons</h1>
    <p>Gebruik één van de onderstaande verbindingen met ons (kopieert de beelden van uw eigen server).</p>   
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('ned-index') !!}" class="pg-links"><img src="{{ URL::asset('images/ned-onedate%20(1).jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('ned-index') !!}" class="pg-links">OneDate.org - Kies ervoor om het Feest van Pasen samen op één en dezelfde datum te vieren</a></p>
            <p>Zet een kleine stap naar <a href="{!! url('ned-index') !!}" class="pg-links"> Christelijke Eenheid</a>. Kies ervoor om het Feest van Pasen samen op één en dezelfde datum te vieren.</p>
        
        <p> Website petitie voor de <a href="{!! url('ned-index') !!}" class="pg-links"> eenheid van de Paasdatum</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/ned.footer')
@endsection