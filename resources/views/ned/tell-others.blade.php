@extends('layouts/ned.header')

@section('content')
<div class="content">


<h2>Zend een e-mail aan je vrienden</h2>
<p>Help het woord over deze online petitie te verspreiden door je vrienden te e-mailen.</p>

<p>Voorgesteld onderwerp: Kies ervoor om het Feest van Pasen samen op één en dezelfde datum te vieren</p>

<p>Boodschap:</p>
    <p>Hallo,</p>

<p>Ik heb deze site gevonden met een online petitie voor christenen van alle denominaties, om Pasen allen op één en dezelfde datum te vieren. Ga naar  <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> om meer te vernemen teken in. </p>

<p>Dank u</p>

<p><a href="mailto:?subject= Kies ervoor om het Feest van Pasen samen op één en dezelfde datum te vieren&body=Hallo%0D%0A %0D%0A Ik heb deze site gevonden met een online petitie voor christenen van alle denominaties, om Pasen allen op één en dezelfde datum te vieren. Ga naar http://www.onedate.org om meer te vernemen teken in.%0D%0A%0D%0AThanks&cc=&bcc=" class="pg-links">klik hier</a> Klik hier om je verzuimde e-mail te openen met het bovengenomede onderwerp en boodschap.</p>

<h2>Parochieblad</h2>
<p>Vraag aan je priester/pastoor de petitie aan te kondigen tijdens de mis/dienst en doe het zo mogelijk vermelden in het parochieblad.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/ned.footer')
@endsection