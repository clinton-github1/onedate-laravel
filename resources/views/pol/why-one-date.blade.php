@extends('layouts/pol.header')

@section('content')
<div class="content">


<h1>Dlaczego mam podpisywać petycję o wspólnym obchodzeniem świąt Wielkanocy?</h1>
<p>To proste, dlatego że jako jedna chrześcijańska rodzina jesteśmy podzieleni w tej kwestii, a nasz rozłam jest grzechem. Jeśli nie możemy się zgodzić co do wspólnego celebrowania Świąt Wielkanocy, to jak możemy być znakiem Pokoju i Jedności dla świata?</p>

<p>“A przeto upominam was, bracia, w imię Pana naszego Jezusa Chrystusa, abyście byli zgodni, i by nie było wśród was rozłamów; byście byli jednego ducha i jednej myśli.” (1 Kor 1,10)</p>

<p>“On jednak, znając ich myśli, rzekł do nich: <b style="color:#ea1951"> Każde królestwo wewnętrznie skłócone pustoszeje i dom na dom się wali”</b>(Łk 11,17)</p>

<p><b style="color:#ea1951">“Nie tylko za nimi proszę, ale i za tymi, którzy dzięki ich słowu będą wierzyć we Mnie; aby wszyscy stanowili jedno, jak Ty, Ojcze, we Mnie, a Ja w Tobie, aby i oni stanowili w Nas jedno, aby świat uwierzył, żeś Ty Mnie posłał.”</b> (J 17,20-21)</p>

<p>“Kto zaś umie dobrze czynić, a nie czyni, grzeszy.” (Jk 4,17)</p>
<div class="read">
<div class="read-more">

    <h2>Czytaj Dalej</h2>
    <a href="{!! url('pol-what-can-we-do') !!}" class="pg-links">Co możemy zrobić?</a>
    
</div>
<div class="sign-now">

    <h2>Podpisz Teraz</h2>
    <a href="#" class="pg-links">Podpisz się pod petycją o wspólną datę Wielkanocy</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection