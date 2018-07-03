@extends('layouts/deu.header')

@section('content')
<div class="content">


<h1>Unsere Sünde der Spaltung unter Christen</h1>
<p>Die Auferstehung Christi steht im Zentrum unseres christlichen Glaubens. Ohne sie würde es keine Christenheit geben, <b>Beinahe jedes Jahr feiern Katholiken, Protestanten und Orthodoxe jedoch das Osterfest an unterschiedlichen Daten,</b>, Manchmal liegen die verschiedenen Osterdaten bis zu fünf Wochen auseinander und in anderen Jahren fallen sie auf denselben Tag.</p>

<p>Diese Spaltung unter den Christen, welche dieses Fest der Feste betrifft, ist eine grosse Sünde und alle Christen wissen, dass Spaltung nicht von Gott kommt.</p>

<div class="read">
<div class="read-more">

    <h2>Hier weiterlesen</h2>
    <a href="{!! url('deu-diff-dates') !!}" class="pg-links">Weshalb gibt es verschiedene Osterdaten?</a>
    
</div>
<div class="sign-now">

    <h2>Jetzt abstimmen</h2>
    <a href="{!! url('deu-sign-petition') !!}" class="pg-links">Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection