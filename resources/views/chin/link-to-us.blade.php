@extends('layouts/chin.header')

@section('content')
<div class="content">
<section class="link-to-us">

    <h1>連結我們</h1>
    <p>請使用以下的連結連結到我。</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('ch-index') !!}" class="pg-links"><img src="images/onedate.jpg" alt="home page link image"></a></div>
        <p><a href="{!! url('ch-index') !!}" class="pg-links">OneDate.org - 為同一日期慶祝復活節投票</a></p>
            <p>朝著邁一小步 <a href="{!! url('ch-index') !!}" class="pg-links"> 基督徒合一</a>。 為同一日期慶祝復活節投票。</p>
        
        <p> 網站請願為了<a href="{!! url('ch-index') !!}" class="pg-links"> 復活節的合一</a>。</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection