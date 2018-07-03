@extends('layouts/por.header')

@section('content')
<div class="content">


<section class="link-to-us">

    <h1>Nosso link</h1>
    <p>Use um dos links abaixo para adicionar nosso link (Copie as imagens para o seu servidor).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('por-index') !!}" class="pg-links"><img src="{{ URL::asset('images/por-banner-Rom12-5%20(1).jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('por-index') !!}" class="pg-links">OneDate.org - Vote para todos celebrarmos a Festa da Páscoa na mesma data</a></p>
            <p>Dê um pequeno passo em direção <a href="{!! url('por-index') !!}" class="pg-links"> à unidade cristã</a>. Vote para todos celebrarmos a Festa da Páscoa na mesma data.</p>
        
        <p>Página de abaixo-assinado para a <a href="{!! url('por-index') !!}" class="pg-links">unificação da data da Páscoa.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/por.footer')
@endsection