@extends('layouts/ita.header')

@section('content')
<div class="content">
    


<h2>Manda un’E-mail ai tuoi amici</h2>
<p>Aiutaci a diffondere questa petizione online inviando un’e-mail ai tuoi amici.</p>

<p>Oggetto Suggerito: Vota perché si celebri la Festa di Pasqua tutti alla stessa data</p>

<p>Corpo del messaggio:</p>
    <p>Ciao,</p>

<p>ho trovato questo sito sul quale è in atto una petizione on line affinché i Cristiani di tutte le confessioni celebrino la Pasqua alla stessa data. Clicca su <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> per saperne di più e firma. </p>

<p>Grazie</p>

<p><a href="mailto:?subject=Vota perché si celebri la Festa di Pasqua tutti alla stessa data&body=Ciao%0D%0A %0D%0A ho trovato questo sito sul quale è in atto una petizione on line affinché i Cristiani di tutte le confessioni celebrino la Pasqua alla stessa data. Clicca su http://www.onedate.org per saperne di più e firma.%0D%0A%0D%0AGrazie&cc=&bcc=" class="pg-links">Clicca qui</a> per aprire automaticamente la tua casella di posta ed avere oggetto e corpo del messaggio già pre-impostato.</p>

<h2>Bollettino Parrocchiale</h2>
<p>Chiedi al tuo Parroco/Pastore di annunciare la petizione durante la messa/il servizio e se possibile di farne menzione sul bollettino parrocchiale.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection