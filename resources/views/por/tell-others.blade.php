@extends('layouts/por.header')

@section('content')
<div class="content">



<h2>Envie um e-mail a seus amigos</h2>
<p>Ajude a divulgar este abaixo-assinado on-line enviando uma mensagem a seus amigos.</p>

<p>Sugestão para o Assunto: Vote para todos celebrarmos a Festa da Páscoa na mesma data</p>

<p>Texto da mensagem:</p>
    <p>Olá, </p>

<p>Encontrei este site com um abaixo-assinado on-line para que os cristãos de todas as denominações celebrem a Páscoa na mesma data. Vá para <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> para saber mais e assinar.</p>

<p>Obrigado(a)</p>

<p><a href="mailto:?subject=Vote para todos celebrarmos a Festa da Páscoa na mesma data&body=Olá%0D%0A %0D%0A Encontrei este site com um abaixo-assinado on-line para que os cristãos de todas as denominações celebrem a Páscoa na mesma data. Vá para http://www.onedate.org para saber mais e assinar.%0D%0A%0D%0AObrigado(a)&cc=&bcc=" class="pg-links">Clique aqui</a> para abrir seu programa de e-mail padrão com o assunto e o texto acima.</p>

<h2>Informativo paroquial</h2>
<p>Peça a seu padre/pastor que divulgue o abaixo-assinado durante a missa/culto e, se possível, que o mencione no informativo da paróquia.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/por.footer')
@endsection