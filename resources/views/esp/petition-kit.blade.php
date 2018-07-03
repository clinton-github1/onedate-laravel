@extends('layouts/esp.header')
@section('content')
<div class="content">
    
<h2>Kit de Petición</h2>
<p>Ud. puede ayudar a elevar la conciencia la la Petición de OneDate, imprimiendo el kit de petición que se encuentra abajo y recolectando firmas en su comunidad o parroquia.</p>

<p>Después de que haya recolectado las firmas deberá ingresarlas al <a href="{!!('esp-sign-petition') !!}" class="pg-links"> Vote por una Fecha Unificada</a> página.</p>

<p>Una vez haya impreso el kit de petición puede ser útil imprimir una buena cantidad de de copias de la última página que es donde van las firmas</p>

<a href="#" class="pg-links">Haga clic aquí para imprimir el kit de petición.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/esp.footer')
@endsection