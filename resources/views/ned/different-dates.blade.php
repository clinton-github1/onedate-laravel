@extends('layouts/ned.header')

@section('content')
<div class="content">



<p>Als Jezus ziet dat Christenen bijna elk jaar Zijn Passie tweemaal vieren, lijdt Jezus op mystieke wijze een dergelijke verdeeldheid te zien in Zijn familie voor wie Hij is gestorven en heeft gebeden om ze tot één familie te maken.</p>

<p>Het kan de lezer van deze website helpen, in zijn of haar belang, om enkele van de redenen te onderzoeken, die betrekking hebben op het bestaan van twee Paasdata, hoewel het hoofddoel van deze website is duidelijkheid te verschaffen met betrekking tot de leden van het mystieke Lichaam van Christus, de Kerk, en de wens te werken als een hefboom ter verandering. Die verandering is verwacht een stap naar kerkelijke eenheid te zijn.</p>

<div class="read">
<div class="read-more">

    <h2>Lees Meer</h2>
    <a href="{!! url('ned-why-one-date') !!}" class="pg-links">Waarom kiezen voor het vieren van Pasen op één datum?</a>
    
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