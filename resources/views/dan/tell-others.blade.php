@extends('layouts/dan.header')

@section('content')
<div class="content">

<h2>Send en email til dine venner</h2>
<p>Hjælp med at udbrede denne online underskriftsindsamling ved at emaile dine venner</p>

<p>Foreslået emne: Skriv under på, at vi alle fejrer påskefesten på samme tid</p>

<p>Tekst:</p>
    <p>Hej</p>

<p><a href="http://www.onedate.org" class="pg-links">www.onedate.org/dk</a> for at finde ud af mere og underskrive. </p>

<p>tak</p>

<p><a href="mailto:?subject=RE:Foreslået emne: Skriv under på&body=Hej%0D%0A %0D%0A www.onedate.org/dk  for at finde ud af mere og underskrive.%0D%0A%0D%0Atak&cc=&bcc=" class="pg-links">Klik her</a> for at åbne dit favorit email program med ovenstående emne og tekst.</p>

<h2>Kirkeblad</h2>
<p>Bed din præst om at informere om underskriftsindsamlingen efter gudstjenesterne og annoncér i kirkeblade hvis muligt</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection