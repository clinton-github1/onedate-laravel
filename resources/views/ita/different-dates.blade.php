@extends('layouts/ita.header')

@section('content')
<div class="content">
    


<p>Quando Gesù vede i cristiani celebrare la Sua Passione, la Sua Morte e la Sua Risurrezione due volte quasi ogni anno, Egli, in modo mistico, soffre a causa della divisione all’interno della Sua Famiglia per la quale ha sofferto ed è morto per renderla Una.</p>

<p>Potrà altresì essere utile al lettore di questo sito, per sua propria conoscenza personale, ricercare alcune delle ragioni che hanno portato all’esistenza delle due date della Pasqua, tuttavia, lo scopo principale del sito, è quello di evidenziare l’importanza di appartenere al corpo mistico di Cristo, la Chiesa e il desiderio di agire quale leva per il cambiamento. Quel cambiamento che è un passo in avanti verso l’unità della Chiesa.</p>

<div class="read">
<div class="read-more">

    <h2>Per saperne di più</h2>
    <a href="{!! url('ita-why-one-date') !!}" class="pg-links">Perché Votare per Celebrare tutti la Pasqua alla stessa data?</a>
    
</div>
<div class="sign-now">

    <h2>Vota Adesso</h2>
    <a href="{!! url('ita-sign-petition') !!}" class="pg-links">Vota perché si celebri la Festa di Pasqua tutti alla stessa data</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection