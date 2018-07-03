@extends('layouts/rus.header')

@section('content')
<div class="content">


<section class="link-to-us">

    <h1>Включите наш адрес в ваш сайт</h1>
    <p>Пользуйтесь одним из приведенных ниже адресов-связок для контакта с нами (скопируйте уже готовые объявления на ваш сервер).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('rus-index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('rus-index') !!}" class="pg-links">OneDate.org - Подпишите обращение в поддержку объединения дня Пасхи</a></p>
            <p>Сделайте небольшой шаг к тому, что для всех нас так важно - <a href="{!! url('rus-index') !!}" class="pg-links"> Христианское единство</a>. Подпишите обращение в поддержку объединения дня Пасхи.</p>
        
        <p> Обращение на сайте Интернета с призывом <a href="{!! url('rus-index') !!}" class="pg-links"> к объединению дня празднования Пасхи.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/rus.footer')
@endsection