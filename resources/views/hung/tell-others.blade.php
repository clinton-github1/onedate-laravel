@extends('layouts/hung.header')

@section('content')
<div class="content">
    

<h2>Küldjetek egy E-mailt barátaitoknak</h2>
<p>Segítsétek az online-petíció terjedését, azzal, hogy továbbkülditek barátaitoknak.</p>

<p>Javasolt tárgy: Szavazz, hogy egy időpontban ünnepeljük a Húsvétot</p>

<p>A szöveg:</p>
    <p>Szia…,</p>

<p>Találtam egy weboldalt, amelyen van egy online-petíció is. A cél, hogy minden Keresztény felekezet ugyanazon a napon ünnepelje a Húsvétot. További információért látogass el a <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> címre, ahol még többet megtudhatsz, és szavazhatsz is erre a fontos szándékra. </p>

<p>Köszönöm:</p>

<p><a href="mailto:?subject=Szavazz hogy egy időpontban ünnepeljük a Húsvétot&body=Szia…%0D%0A %0D%0A Találtam egy weboldalt amelyen van egy online-petíció is. A cél hogy minden Keresztény felekezet ugyanazon a napon ünnepelje a Húsvétot. További információért látogass el a http://www.onedate.org címre ahol még többet megtudhatsz és szavazhatsz is erre a fontos szándékra.%0D%0A%0D%0AKöszönöm:&cc=&bcc=" class="pg-links">Kattints ide</a> , ha a levelezőprogramodról szeretnél egy e-mailt küldeni a fenti szöveggel</p>

<h2>Plébániai/templomi hirdetés</h2>
<p>Kérjétek meg papjaitokat/lelkészeiteket, hogy a mise/istentisztelet alkalmával ismertessék a petíciót, ill. ha lehetséges, jelentessék meg a plébániai/közösségi újságban.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection