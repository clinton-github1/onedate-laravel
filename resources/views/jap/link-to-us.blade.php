@extends('layouts/jap.header')

@section('content')
<div class="content">

<section class="link-to-us">

    <h1>このサイトにリンクする</h1>
    <p>このサイトにリンクを貼るには、下のリンクのどれかをお使いください。（サーバーにこの画像をコピーして使用してください）.</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('jap-index') !!}" class="pg-links"><img src="{URL::asset('images/jap-onedate%20(1).jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('jap-index') !!}" class="pg-links">ワンデイト・ドットオーグ- 復活祭を皆が一つの日に祝うための嘆願に署名する</a></p>
            <p><a href="{!! url('jap-index') !!}" class="pg-links">キリスト者の一致</a>. へ小さな一歩を踏み出そう　復活祭を皆が一つの日に祝うための嘆願に署名する</p>
        
        <p>  <a href="{!! url('jap-index') !!}" class="pg-links">復活祭の日付の一致</a>のためのインターネット署名</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection