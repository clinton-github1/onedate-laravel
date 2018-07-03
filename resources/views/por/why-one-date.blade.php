@extends('layouts/por.header')

@section('content')
<div class="content">




<h1>Por que assinar para todos celebrarmos a Páscoa na mesma data?</h1>
<p>Simplesmente porque, sendo da mesma família cristã, estamos divididos nesse aspecto, e nossa divisão é um pecado. Se não entramos em acordo sequer para celebrar a Festa da Ressurreição no mesmo dia, como podemos esperar ser um sinal de paz e unidade para o mundo?</p>

<p>“Rogo-vos, irmãos, em nome de nosso Senhor Jesus Cristo, que todos estejais em pleno acordo e que não haja entre vós divisões. Vivei em boa harmonia, no mesmo espírito e no mesmo sentimento.” (1Cor1,10)</p>

<p>“Penetrando nos seus pensamentos, disse-lhes Jesus:  <b style="color:#ea1951">odo reino dividido contra si mesmo será destruído e seus edifícios cairão uns sobre os outros.”</b>(Lc 11,17)</p>

<p><b style="color:#ea1951">“Não rogo somente por eles, mas também por aqueles que por sua palavra hão de crer em mim. Para que todos sejam um, assim como tu, Pai, estás em mim e eu em ti, para que também eles estejam em nós e o mundo creia que tu me envias.”</b>  (Jo 17,20-21)</p>

<p>“Aquele que sabe fazer o bem, e não o faz, peca.” (Tg 4,17)</p>
<div class="read">
<div class="read-more">

    <h2>Leia mais</h2>
    <a href="{!! url('por-what-can-we-do') !!}" class="pg-links">O que podemos fazer?</a>   
</div>
<div class="sign-now">

    <h2>Assine agora</h2>
    <a href="#" class="pg-links">Vote para todos celebrarmos a Festa da Páscoa na mesma data</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/por.footer')
@endsection