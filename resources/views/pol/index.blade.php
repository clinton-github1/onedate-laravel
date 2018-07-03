@extends('layouts/pol.header')

@section('content')
<div class="content">



<h1>Nasz grzech podziału jako Chrześcijan</h1>
<p>Zmartwychwstanie jest w centrum wiary chrześcijańskiej, bez niego nie byłoby chrześcijaństwa, jednakże,<b> prawie każdego roku Katolicy, Protestanci i Prawosławni celebrują Wielkanoc w różnych datach</b>,  niekiedy w odstępie pięciu tygodni od siebie, a czasem tego samego dnia.</p>

<p>To podzielenie pomiędzy Chrześcijanami, którzy celebrują Święta Wielkanocy jest wielkim grzechem i wszyscy Chrześcijanie wiedzą, że ten podział nie pochodzi od Boga.</p>

<div class="read">
<div class="read-more">

    <h2>Czytaj Dalej</h2>
    <a href="{!! url('pol-diff-dates') !!}" class="pg-links">Dlaczego są różne daty Wielkanocy?</a>
    
</div>
<div class="sign-now">

    <h2>Podpisz Teraz</h2>
    <a href="{!! url('pol-sign-petition') !!}" class="pg-links">Podpisz petycję o wspólną datę Wielkanocy</a>
    
</div>
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection