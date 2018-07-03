@extends('layouts/pol.header')

@section('content')
<div class="content">


<section class="link-to-us">

    <h1>Link do nas</h1>
    <p>Prosimy, o zamieszczenie poniższego linka (Prosimy o skopiowanie obrazka na własny serwer).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('pol-index') !!}" class="pg-links"><img src="{{ URL::asset('images/pol-onedate%20(1).jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('pol-index') !!}" class="pg-links">OneDate.org - Podpisz się pod petycją o wspólną datę Wielkanocy</a></p>
            <p>Podejmij mały krok naprzód <a href="{!! url('pol-index') !!}" class="pg-links"> Jedność Chrześcijan</a>. Podpisz się pod petycją o wspólną datę Wielkanocy.</p>
        
        <p> Internetowa petycja dla<a href="{!! url('pol-index') !!}" class="pg-links"> zjednoczenia daty Wielkanocy.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection