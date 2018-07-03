@extends('layouts/hung.header')

@section('content')
<div class="content">
    


<h1>A Keresztények bűne: a megosztottság!</h1>
<p>Krisztus Feltámadása keresztény hitünk lényege, ami nélkül nincs is kereszténység, <b> ennek ellenére a katolikusok, a protestánsok, és az ortodoxok majdnem minden évben egymástól eltérő időpontban ünneplik a Húsvétot,</b>, olykor öt hét különbség is van a két dátum között, máskor viszont egy napra esik.</p>

<p>A keresztények megosztottsága - a Legfőbb Ünnep kapcsán - bűn, és minden keresztény jól tudja, hogy a megosztottság nem Istentől származik.</p>

<div class="read">
<div class="read-more">

    <h2>Tovább olvasom</h2>
    <a href="{!! url('hung-diff-dates') !!}" class="pg-links">Miért tér el a Húsvét dátuma?</a>
    
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