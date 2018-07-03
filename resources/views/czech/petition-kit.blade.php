@extends('layouts/czech.header')

@section('content')
<div class="content">

<h2>Informace o petici</h2>
<p>Dále můžete pomoci r ozšiřovat povědomí o petici OneDate vytištěním jejího úvodu a sbíráním podpisů ve vaší farnosti či komunitě.</p>

<p>Poté, co shromáždíte podpisy, je bude potřeba vložit zde - <a href="{!! url('cz-sign-petition') !!}" class="pg-links"> Hlasujte pro jednotné datum </a> - do tohoto webu.</p>

<p>Po vytištění úvodu petice je užitečné vytisknout poslední stranu, kde je prostor pro podpisy, několikrát.</p>

<a href="#" class="pg-links">Klikněte zde, pro tisk petice.</a>

@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection