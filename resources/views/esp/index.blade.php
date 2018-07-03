@extends('layouts/esp.header')

@section('content')
<div class="content">
    
<h1>Nuestro pecado de división como Cristianos</h1>
<p>La Resurrección es el eje central de la fe Cristiana, sin ella no hay Cristianismo, sin embargo, <b>casi todos los años Católicos, Protestantes y Ortodoxos celebran la Pascua en fechas distintas,</b>, algunos años hay cinco semanas de diferencia y otros años en la misma fecha.</p>

<p>TEsta división entre los Cristianos al celebrar la Fiesta de la Pascua es un gran pecado y los Cristianos sabemos que esa división no proviene de Dios.</p>

<div class="read">
<div class="read-more">

    <h2>Lea Más</h2>
    <a href="{!! url('esp-diff-dates') !!}" class="pg-links">Por qué hay distintas fechas de la Pascua?</a>
    
</div>
<div class="sign-now">

    <h2>Vote Ahora</h2>
    <a href="{!! url('esp-sign-petition') !!}" class="pg-links">Vote para Celebrar la Fiesta de la Pascua todos en la misma fecha</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/esp.footer')
@endsection