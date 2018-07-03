@extends('layouts/fran.header')

@section('content')
<div class="content">
    
<h2>Documents de pétition</h2>
<p>Vous pouvez contribuer à r te;pandre la pétition pour ’’Une Seule date’’ en imprimant les documents de pétition et en récoltant des signatures dans votre paroisse ou votre communauté.</p>

<p>Après avoir récolté des signatures, vous voudrez bien les enregistrer dans la page <a href="{!! url('fr-sign-petition') !!}" class="pg-links"> Votez pour une seule date </a>.</p>

<p>La dernière page des documents de pétition est destinée à recueillir les signatures. Il peut donc être utile d’imprimer plusieurs exemplaires de cette dernière page ou d’en faire plusieurs photocopies.</p>

<a href="#" class="pg-links">Pour imprimer les documents de pétition, cliquer ici.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/fran.footer')
@endsection