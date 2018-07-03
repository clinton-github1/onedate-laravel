@extends('layouts/deu.header')

@section('content')
<div class="content">
    
<h2>Petitions-Text</h2>
<p>Ferner können Sie helfen, das Bewusstsein für die "Petition für ein einheitliches Osterdatum" zu schärfen, indem Ihr den untenstehenden Petitionstext ausdruckt und dafür Unterschriften in euren lokalen Gemeinden/Gemeinschaften sammelt.</p>

<p>Nachdem Sie die Unterschriften zusammengetragen haben, tragen Sie diese bitte auf dieser <a href="{!! url('deu-sign-petition') !!}" class="pg-links"> Eure Stimme für ein einheitliches Osterdatum</a> Seite ein.</p>

<p>Wenn Sie den Petitions-Text bereits einmal ausgedruckt haben, ist es sicher hilfreich, mehrere Seiten des Unterschriftblattes (letzte Seite) auszudrucken.</p>

<a href="#" class="pg-links">Bitte hier klicken, um den Petitions-Text auszudrucken.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection