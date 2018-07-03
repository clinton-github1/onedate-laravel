@extends('layouts/ned.header')

@section('content')
<div class="content">




<h1>Onze zonden van verdeeldheid als Christenen</h1>
<p>De Verrijzenis staat in het centrum van het Christelijk geloof, zonder die Verrijzenis is er geen Christendom, maar, <b>bijna elk jaar vieren Katholieken, Protestanten en Orthodoxen Pasen op verschillende data,</b>, sommige jaren zelfs vijf weken apart van elkaar en op andere jaren op dezelfe datum.</p>

<p>Deze verdeeldheid onder Christenen in het vieren van het Feest der Feesten is een grote zonde, en alle Christenen weten dat verdeeldheid niet van God komt..</p>

<div class="read">
<div class="read-more">

    <h2>Lees Meer </h2>
    <a href="{!! url('ned-diff-dates') !!}" class="pg-links">Waarom zijn er verschillende data voor Pasen?</a>
    
</div>
<div class="sign-now">

    <h2>Kies Nu</h2>
    <a href="{!! url('ned-sign-petition') !!}" class="pg-links">Kies ervoor om het Feest van Pasen samen op één en dezelfde datum te vieren</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/ned.footer')
@endsection