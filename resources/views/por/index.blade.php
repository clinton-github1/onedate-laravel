@extends('layouts/por.header')

@section('content')
<div class="content">


<h1>Nosso pecado de divisão enquanto cristãos</h1>
<p>A Ressurreição está no centro da fé cristã. Sem ela, não há cristianismo. No entanto, <b> quase todos os anos, católicos, protestantes e ortodoxos celebram a Páscoa em datas diferentes,</b>, – às vezes, com até cinco semanas de diferença e, outras vezes, na mesma data.</p>

<p>Essa divisão entre os cristãos na celebração da Festa das Festas é um grande pecado, e todos os cristãos sabem que a divisão não vem de Deus.</p>

<div class="read">
<div class="read-more">

    <h2>Leia mais</h2>
    <a href="{!! url('por-diff-dates') !!}" class="pg-links">Por que existem datas diferentes para a Páscoa?</a>
    
</div>
<div class="sign-now">

    <h2>Assine agora</h2>
    <a href="{!! url('por-sign-petition') !!}" class="pg-links">Vote para todos celebrarmos a Festa da Páscoa na mesma data</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/por.footer')
@endsection