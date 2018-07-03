@extends('layouts/esp.header')
@section('content')
<div class="content">
    
<h2>Envíe un correo a un amigo</h2>
<p>Ayude a difundir esta petición electrónica enviando correos electrónicos a sus amigos.</p>

<p>Asunto sugerido: Vote para Celebrar la Fiesta de la Pascua todos en la misma fecha</p>

<p>Cuerpo del mensaje:</p>
    <p>Hola,</p>

<p>He encontrado este sitio web que tiene una petición electrónica para todos los Cristianos de todas las comunidades para celebrar la Pascua en la misma fecha. Vaya a <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> para averiguar más y registrarse . </p>

<p>Gracias</p>

<p><a href="mailto:?subject=RE:Vote para Celebrar la Fiesta de la Pascua todos en la misma fecha&body=Hola%0D%0A %0D%0A He encontrado este sitio web que tiene una petición electrónica para todos los Cristianos de todas las comunidades para celebrar la Pascua en la misma fecha. Vaya a http://www.onedate.org para averiguar más y registrarse..%0D%0A%0D%0AGracias&cc=&bcc=" class="pg-links">Haga clic acá </a> para que su programa de correo por defecto abra con el asunto y cuerpo de mensaje mostrados arriba .</p>

<h2>Boletín parroquial</h2>
<p>Solicite a su sacerdote o pastor que anuncie esta petición durante la misa o alabanza y si es posible que lo mencione en los boletines parroquiales .</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/esp.footer')
@endsection