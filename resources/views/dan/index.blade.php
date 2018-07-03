@extends('layouts/dan.header')

@section('content')
<div class="content">



<h1>Vores splittelse mellem kristne som synd</h1>
<p>Skønt opstandelsen er den kristne tros centrum, uden hvilken der ikke findes nogen kristenhed, fejrer katolikker, <b>protestanter og ortodokse næsten hvert år påske på forskellige datoer</b>,  nogle år med helt op til fem ugers mellemrum og andre år på samme dato.</p>

<p>Denne splittelse blandt kristne med hensyn til fejringen af Festernes Fest er en stor synd og alle kristne ved, at splittelse ikke kommer fra Gud.</p>

<div class="read">
<div class="read-more">

    <h2>Læs mere</h2>
    <a href="{!! url('dan-diff-dates') !!}" class="pg-links">Hvorfor er der forskellige Påske datoer?</a>
    
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