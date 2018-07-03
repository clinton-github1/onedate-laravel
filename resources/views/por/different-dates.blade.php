@extends('layouts/por.header')

@section('content')
<div class="content">


<p>Quando Jesus vê, quase todos os anos, os cristãos celebrarem sua Paixão, Morte e Ressurreição duas vezes, Ele sofre, de uma forma mística, por ver essa divisão em sua família – família pela qual Ele morreu e sofreu, a fim de torná-la uma só.</p>

<p>Talvez seja útil aos leitores desta página, por interesse pessoal, procurar saber algumas das razões da existência de duas datas da Páscoa. Entretanto, o principal objetivo desta página é mostrar as evidências com relação às pessoas do corpo místico de Cristo, a Igreja, e o desejo de agir como instrumento de mudança. Essa mudança está prevista como um passo em direção à unidade da Igreja.</p>

<div class="read">
<div class="read-more">

    <h2>Leia mais</h2>
    <a href="{!! url('por-why-one-date') !!}" class="pg-links">Por que assinar para todos celebrarmos a Páscoa na mesma data?</a>
    
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