@extends('layouts/dan.header')

@section('content')
<div class="content">


<h1>Forskellige tidspunkter</h1>

<p>Når Jesus næsten hvert år ser kristne fejre Hans lidelse, død og opstandelse to gange, lider Jesus ad mystisk vej ved at se sådanne splittelser indenfor Sin familie, som Han er død for og har lidt for at gøre til én familie.</p>

<p>Det er hverken intentionen eller formålet med denne webside at rejse mulighed for at debattere og diskutere årsagerne bag dét, at vi som kristne fejrer påske på forskellige tidspunkter og ikke på ét tidspunkt. Det er udelukkende intentionen at skabe synlighed i form af en appel, der kan blive formidlet til de respektive medlemmer af Kirkens hierarki indenfor de eksisterende forskellige forgreninger, dvs. til dem, som besidder muligheden for at skabe forandring i kraft af den indflydelse, som de har del i, i bestræbelsen på, for os alle sammen som Kirke, at bevirke forandring og blive en enhed!</p>

<p>Det kan udmærket være af interesse for denne websides læser at undersøge nogle af årsagerne, der ligger til baggrund for, at der findes to tidspunkter for påske, men denne websides overordnede formål er at tydeliggøre mennesker som del af Kristi Mystiske Legeme, Kirken, samt ønsket om at virke som redskab for forandring. Denne forandring imødeses som et skridt i retning af kirkelig enhed.</p>

<div class="read">
<div class="read-more">

    <h2>Læs mere</h2>
    <a href="{!! url('dan-why-one-date') !!}" class="pg-links">Hvorfor underskrive appelen for en fejring af Påsken på samme dato?</a>
    
</div>
<div class="sign-now">

    <h2>Underskriv nu</h2>
    <a href="{!! url('dan-sign-petition') !!}" class="pg-links">Underskriv appelen for at fejre Påsken samme dato</a>
    
</div>
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection