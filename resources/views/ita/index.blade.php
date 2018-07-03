@extends('layouts/ita.header')

@section('content')
<div class="content">
    
<h1>Il nostro peccato di divisione come cristiani</h1>
<p>La Risurrezione è al centro della fede cristiana, senza di essa non c"è cristianità, tuttavia, <b>quasi ogni anno cattolici, protestanti e ortodossi celebrano la Pasqua in date diverse</b>, in alcuni anni può capitare che ciò accada con una distanza l’una dall’altra fino a cinque settimane, in altri anni nella stessa data.</p>

<p>Questa divisione tra cristiani nel celebrare la Festa delle Feste, è un grande peccato e i cristiani di tutte le confessioni sanno che la divisione non viene da Dio.</p>

<div class="read">
<div class="read-more">

    <h2>Per saperne di più</h2>
    <a href="{!! url('ita-diff-dates') !!}" class="pg-links">Perché la Pasqua si celebra in date diverse??</a>
    
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