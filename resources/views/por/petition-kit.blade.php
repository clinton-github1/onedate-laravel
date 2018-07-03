@extends('layouts/por.header')

@section('content')
<div class="content">


<h2>Kit do Abaixo-Assinado</h2>
<p>Você pode ajudar a divulgar o Abaixo-Assinado OneDate ainda mais, imprimindo o kit abaixo e recolhendo assinaturas em sua paróquia/comunidade.

Após coletar as assinaturas, você deverá acrescentá-las na página <a href="{!! url('por-sign-petition') !!}" class="pg-links"> Assine</a>na internet.</p>

<p>Ao imprimir o kit do abaixo-assinado, pode ser útil imprimir mais cópias da última página, que é a da tabela de assinaturas.</p>

<a href="#" class="pg-links">Clique aqui para imprimir o kit do abaixo-assinado.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/por.footer')
@endsection