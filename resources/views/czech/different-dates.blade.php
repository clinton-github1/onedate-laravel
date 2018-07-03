@extends('layouts/czech.header')

@section('content')
<div class="content">


<p>Když Ježíš vidí křesťany slavit Jeho Utrpení, Smrt a Zmrtvýchvstání téměř každý rok dvakrát, mystickým způsobem trpí tímto rozdělením Své Rodiny, pro kterou trpěl a zemřel, aby ji učinil jednou Rodinou</p>

<p>Tyto stránky mohou posloužit čtenáři, aby se ve svém vlastním zájmu seznámil s důvody, proč existují dvě data Velikonoc, ačkoliv jejich hlavním cílem je poskytnout svědectví týkající se lidu mystického Kristova těla Církve a touhy způsobit změnu. Tato změna je krokem k jednotě Církve.</p>

<div class="read">
<div class="read-more">

    <h2>Číst více</h2>
    <a href="{!! url('cz-why-one-date') !!}" class="pg-links">Proč hlasovat pro společné slavení Velikonoc v jednom termínu?</a>
    
</div>
<div class="sign-now">
 
    <h2>Hlasovat nyní</h2>
    <a href="{!! url('cz-sign-petition') !!}" class="pg-links">Hlasujte pro společné slavení Velikonoc všichni v jednom termínu</a>
    
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection