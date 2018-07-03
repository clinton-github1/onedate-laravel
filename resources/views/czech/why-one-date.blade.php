@extends('layouts/czech.header')

@section('content')
<div class="content">



<h1>Proč hlasovat pro společné slavení Velikonoc v jednom termínu?</h1>
<p>Jednoduše proto, že jako jedna rodina křesťanů jsme v této věci rozděleni a toto naše rozdělení je hřích. Pokud se nemůžeme dohodnout na slavení Zmrtvýchvstávní v jeden den, jak bychom mohli být znamením Míru a Jednoty pro svět?</p>

<p>“Obracím se na vás, bratři, ve jménu našeho Pána Ježíše Krista, abyste byli všichni jednotni a aby mezi vámi nebyli žádné rozbroje, ale abyste byli jednotni stejné mysli a stejného mínění.” (1Kor. 1:10)</p>

<p>“Ale protože znal jejich myšlení, řekl jim, <b style="color:#ea1951">Každé království vnitřně rozdělené pustne a rozdělený dům chátrá”</b>(Lukáš 11:17)</p>

<p><b style="color:#ea1951">“Nemodlím se jen za ně, ale také za ty, kteří uvěří skrze jejich slovo, aby všichni byli jedno. Tak jako Ty Otče, přebýváš ve Mně a Já v Tobě, aby také oni byli v nás, aby tak svět uvěřil, že jsi Mne poslal.” </b> (Jan 17:20-21)</p>

<p>“Kdokoliv ví, co je správně a nečiní to, hřeší.” (Jakub 4:17)</p>
<div class="read">
<div class="read-more">

    <h2>Číst více</h2>
    <a href="{!! url('cz-what-can-we-do') !!}" class="pg-links">Co můžeme udělat?</a>
    
</div>
<div class="sign-now">

    <h2>Hlasovat nyní</h2>
    <a href="#" class="pg-links">Hlasujte pro společné slavení Velikonoc všichni v jednom termínu</a>
    
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection