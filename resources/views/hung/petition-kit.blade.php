@extends('layouts/hung.header')

@section('content')
<div class="content">
    

<h2>A petíció szövege</h2>
<p>YoTovább segíthetitek a petíció ismertté tételét, ha kinyomtatjátok, továbbadjátok az alábbi petíció szövegét, és aláírásokat gyűjtötök egyházközségetekben, közösségeitekben.</p>

<p>Miután az aláírásokat összegyűjtöttétek, vigyétek fel azokat a <a href="{!! url('hung-sign-petition') !!}" class="pg-links">"Aláírások az Egységes Húsvéti Dátumért"</a> oldalra.</p>

<p>Ha a petíció szövegét már egyszer kinyomtattátok, érdemes az aláírásgyűjtő ívekből (utolsó oldal) egyszerre többet is nyomtatni.</p>

<a href="#" class="pg-links">Kattints ide a petíció szövegének kinyomtatásához.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection