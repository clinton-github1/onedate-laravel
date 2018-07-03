@extends('layouts/rus.header')

@section('content')
<div class="content">


<h1>Грех разделения среди христиан лежит на нас</h1>
<p>Воскресение Христа из мертвых является центром Христианской веры. Не будь воскресения, не было бы Христианства, однако, <b>почти каждый год католики, протестанты и православные празднуют Пасху в разные дни,</b>, иногда эта разница может быть до пяти недель, в то время как в другие годы, Пасха может праздноваться в один и тот же день.</p>

<p>Разделение христиан в праздновании Праздника Празднеств является большим грехом, и все христиане знают, что разделение никак не может быть от Бога.</p>

<div class="read">
<div class="read-more">

    <h2>Узнайте больше </h2>
    <a href="{!! url('rus-diff-dates') !!}" class="pg-links">Почему существуют различные даты празднования Пасхи?</a>
    
</div>
<div class="sign-now"> 

    <h2>Подпишите сейчас</h2>
    <a href="{!! url('rus-sign-petition') !!}" class="pg-links">Подпишите обращение в поддержку объединения дня Пасхи</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/rus.footer')
@endsection