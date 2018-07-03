@extends('layouts/fran.header')

@section('content')
<div class="content">


<h1>Notre péché de division en tant que Chrétiens</h1>
<p>La Résurrection est au centre de la foi chrétienne; sans elle, il n’y a pas de Christianisme; malgré cela, <b>presque chaque année, Catholiques, Protestants et Orthodoxes célèbrent Pâques à des dates différentes,</b>parfois distantes de cinq semaines, mais rarement à la même date.</p>

<p>Cette division entre les Chrétiens dans la célébration de cette Fête des fêtes est un grand péché, et tous les chrétiens savent que la division ne vient pas de Dieu.</p>

<div class="read">
<div class="read-more">

    <h2>Pour en savoir plus </h2>
    <a href="{!! url('fr-diff-dates') !!}" class="pg-links">Pourquoi Pâques est il fêté à des dates différentes?</a>
    
</div>
<div class="sign-now">

    <h2>Votez</h2>
    <a href="{!! url('fr-sign-petition') !!}" class="pg-links">Votez pour que nous célébrions tous Pâques à une seule et même date</a>
    
</div>
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/fran.footer')
@endsection