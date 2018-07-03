@extends('layouts/fran.header')

@section('content')
<div class="content">



<p>Jésus a souffert et Il est mort pour faire des Chrétiens une seule famille. Lorsque, presque chaque année, Jésus voit les Chrétiens célébrer deux fois Sa Passion, Sa Mort et Sa Résurrection, Jésus souffre, de manière mystique, de voir dans Sa famille une telle division.</p>

<p>Donc, quelles que soient les raisons historiques de l’existence de deux dates de Pâques, le but principal de ce site est de mettre en évidence le désir du peuple de l’Eglise, corps mystique du Christ, d’agir pour obtenir un changement, changement qui constituera un pas vers l’unité de l’Eglise</p>

<div class="read">
<div class="read-more">

    <h2>Pour en savoir plus</h2>
    <a href="{!! url('fr-why-one-date') !!}" class="pg-links">Pourquoi voter pour que nous célébrions tous Pâques à une seule et même date ?</a>
    
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