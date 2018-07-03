@extends('layouts/pol.header')

@section('content')
<div class="content">


<p>Kiedy Jezus widzi Chrześcijan celebrujących Jego Mękę, Śmierć i Zmartwychwstanie dwukrotnie w ciągu każdego roku, cierpi w mistyczny sposób. Cierpi przez to podzielenie w Jego Rodzinie, bo umarł dla niej i dla jej jedności.</p>
    
<p>Czytelnikom tej strony może opłacić się wiedza na temat powodów, dla których obchodzi się Wielkanoc w dwóch różnych datach, jednak naszym głównym celem jest dostarczenie świadectwa ludzi należących do Mistycznego Ciała Chrystusa czyli Kościoła i ukazania ich pragnienia działania, aby to stało się dźwignią zmiany. Zmiany, która ma być krokiem ku jedności Kościoła.</p>

<div class="read">
<div class="read-more">

    <h2>Czytaj Dalej</h2>
    <a href="{!! url('pol-why-one-date') !!}" class="pg-links">Dlaczego podpisywać petycję o wspólnym obchodzeniem świąt Wielkanocy?</a>
    
</div>
<div class="sign-now">

    <h2>Podpisz Teraz</h2>
    <a href="{!! url('pol-sign-petition') !!}" class="pg-links">Podpisz się pod petycją o wspólną datę Wielkanocy</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection