@extends('layouts/czech.header')

@section('content')
<div class="content">
<h2>Pošlete mail svým přátelům</h2>
<p>Pomozte šířit tuto online petici pomocí emailu mezi svými přáteli.</p>

<p>Návrh předmětu: Hlasujte pro společné slavení Velikonoc všichni v jednom termínu</p>

<p>Vlastní zpráva:</p>
    <p>Ahoj,</p>

<p>Objevil jsem tuto online petici určenou křesťanům všech denominací o slavení Velikonoc ve stejném termínu. Jděte na  <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> Najít více a možnost připojit podpis.  </p>

<p>Díky</p>

<p><a href="mailto:?subject=RE:Hlasujte pro společné slavení Velikonoc všichni v jednom termínu&body=Ahoj%0D%0A %0D%0A Objevil jsem tuto online petici určenou křesťanům všech denominací o slavení Velikonoc ve stejném termínu. Jděte na http://www.onedate.org/cz/ Najít více a možnost připojit podpis.%0D%0A%0D%0ADíky&cc=&bcc=" class="pg-links">Klikněte zde</a> aby byl váš standartní emailový program připravený s uvedeným předmětem a textem zprávy.</p>

<h2>Farní zpravodaj</h2>
<p>Požádejte vašeho kněze/pastora, aby petici vyhlásil během mše svaté/bohoslužby a pokud je to možné, aby o ní vyšla zmínka ve farním zpravodaji.</p>

@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection