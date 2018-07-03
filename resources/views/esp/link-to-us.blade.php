@extends('layouts/esp.header')
@section('content')
<div class="content">
    
<section class="link-to-us">

    <h1>Enlace con nosotros</h1>
    <p>Por favor utilice uno de los enlaces abajo para enlazar con nosotros (Por favor copie las imágenes a su propio servidor).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('esp-index') !!}" class="pg-links"><img src="{{URL::asset('images/esp-banner-Rom12-5.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('esp-index') !!}" class="pg-links">OneDate.org - Vote para Celebrar la Fiesta de la Pascua todos en la misma fecha</a></p>
            <p>Dé un pequeño paso hacia <a href="{!! url('esp-index') !!}" class="pg-links"> Unidad Cristiana</a>. Vote para Celebrar la Fiesta de la Pascua todos en la misma fecha.</p>
        
        <p> Sitio web para la petición de <a href="{!! url('esp-index') !!}" class="pg-links"> unificación de la fecha de la Pascua</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/esp.footer')
@endsection