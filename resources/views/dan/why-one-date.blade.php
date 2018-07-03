@extends('layouts/dan.header')

@section('content')
<div class="content">



<h1>Hvorfor en appel om alles fejring påskefesten på ét tidspunkt?</h1>
<p>Ganske enkelt fordi vi som én kristen familie er splittet i denne sag, og denne vores splittelse er en synd. Hvis vi ikke kan enes om at fejre Opstandelsens Fest på samme dag, hvordan kan vi så håbe på at være et vidnesbyrd om fred og enhed for verden?</p>

<p>”Men Jeg formaner jer, brødre, ved vor Herre Jesu Kristi navn, til at enes, så der ikke er splittelser i blandt jer, men så I holder sammen i tanke og sind”. (1. Kor. 1,10)</p>

<p>”Men da Jesus kendte deres tanker, sagde Han til dem: <b style="color:#ea1951">”Ethvert rige i splid med sig selv lægges øde, og hus falder o ver hus” ”</b>.(Lk. 11,17)</p>

<p><b style="color:#ea1951">”Ikke for dem alene bederJjeg, men også for dem, som ved deres ord tror på Mig, at de alle må være ét, ligesom du, Fader, i Mig og Jeg i Dig, at de også må være i os, for at verden skal tro, at Du har udsendt mig”.</b> (Joh. 17,20)</p>

<p>”Den, der altså ved, hvad der er det rette, men ikke gør det, er en synder”.(Jakobsbrevet, 4,17)</p>
<div class="read">
<div class="read-more">

    <h2>Læs mere</h2>
    <a href="{!! url('dan-what-can-we-do') !!}" class="pg-links">Hvad kan vi gøre?</a>
    
</div>
<div class="sign-now">

    <h2>Underskriv nu</h2>
    <a href="#" class="pg-links">Underskriv appelen for at fejre Påsken samme dato</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection