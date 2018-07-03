@extends('layouts/pol.header')

@section('content')
<div class="content">


<h2>Komplet Petycji</h2>
<p>Możesz pomóc w informowaniu o Petycji OneDate przez drukowanie petycyjnego i przez zbieranie podpisów w swojej lokalnej społeczności.</p>

<p>Po zebraniu napisów możesz wpisać je na stronę petycji o <a href="{!! url('pol-sign-petition') !!}" class="pg-links"> Wspólną datę Wielkanocy</a>.</p>

<p>Po wydrukowaniu petycji dobrze jest wydrukować większą liczbę tylko ostatniej strony, na której mieszczą się napisy.</p>

<a href="#" class="pg-links">Kliknij tutaj, aby wydrukować komplet petycyjny.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection