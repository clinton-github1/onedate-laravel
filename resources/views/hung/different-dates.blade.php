@extends('layouts/hung.header')

@section('content')
<div class="content">
    

<p>A keresztények majdnem minden évben kétszer ünneplik Krisztus Kínszenvedését, Halálát és Feltámadását. Jézus - noha számunkra misztikus módon - szenved ettől a családján belüli megosztottságtól, pedig éppen azért vállalta a szenvedést és a halált, hogy egy családban egyesítsen minket.</p>

<p>Olvasóinkat biztatjuk, hogy járjanak utána a két különböző Húsvéti dátum eredetének. Weboldalunk fő célja, hogy kinyilvánítsa az Egyház (Krisztus misztikus teste) tagjainak vágyát és elősegítse a Húsvét egységes időpontját, amely egy jelentős lépés az Egyház egysége felé.</p>

<div class="read">
<div class="read-more">

    <h2>Tovább olvasom</h2>
    <a href="{!! url('hung-why-one-date') !!}" class="pg-links">Miért fontos a közös Húsvéti dátum?</a>
    
</div>
<div class="sign-now">

    <h2>Most aláírom</h2>
    <a href="{!! url('hung-sign-petition') !!}" class="pg-links">Aláírásomat adom, hogy egy időpontban ünnepeljük a Húsvétot</a>
    
</div>
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection