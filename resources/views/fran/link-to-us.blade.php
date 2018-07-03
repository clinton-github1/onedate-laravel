@extends('layouts/fran.header')

@section('content')
<div class="content">
    
<section class="link-to-us">

    <h1>Liens vers nous</h1>
    <p>Veuillez utiliser un des liens ci-dessous pour mener vers nous (veuillez copier les images ci-dessous dans votre propre serveur).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('fr-index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('fr-index') !!}" class="pg-links">OneDate.org - Votez pour que nous célébrions tous Pâques à une seule et même date</a></p>
            <p>Faites un petit geste pour <a href="{!! url('fr-index') !!}" class="pg-links"> l"Unité des Chrétiens.</a>. Votez pour que nous célébrions tous Pâques à une seule et même date.</p>
        
        <p> Pétition par Internet pour <a href="{!! url('fr-index') !!}" class="pg-links"> l’unification de la date de Pâques.</a></p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/fran.footer')
@endsection