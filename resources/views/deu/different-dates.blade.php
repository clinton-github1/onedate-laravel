@extends('layouts/deu.header')

@section('content')
<div class="content">

<p>Wenn Jesus miterleben muss wie Christen Seine Passion, Tod und Auferstehung beinahe jedes Jahr zweimal feiern, so leidet Jesus auf mystische Weise unter einer solchen Spaltung innerhalb Seiner Familie, für die Er gestorben ist und gelitten hat, um sie zu einer Familie zusammenzubringen.</p>

 

<p>Es mag dem Leser (Leserin) dieser Internetseite nützliche sein, im eigenen Interesse Nachforschungen über die Hintergründe anzustellen, welche dazu führten, dass wir heute zwei unterschiedliche Osterdaten haben. - Das Hauptziel dieser Internetseite ist jedoch den Gliedern des mystischen Leibes Christi, der Kirche, Beweise vorzulegen und der Wunsch, eine Änderung herbeizuführen. Diese Änderung (Einheitliches Osterdatum) wird als Schritt in Richtung Einheit der Kirche gesehen.</p>

<div class="read">
<div class="read-more">

    <h2>Hier weiterlesen</h2>
    <a href="{!! url('deu-why-one-date') !!}" class="pg-links">Weshalb sollen wir unsere Stimme für 
die Feier des Osterfestes aller Christen am gleichen Datum abgeben?</a>
    
</div>
<div class="sign-now">

    <h2>Jetzt abstimmen</h2>
    <a href="{ app.url_generator.generate('deu-sign-petition') }}" class="pg-links">Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection