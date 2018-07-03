@extends('layouts/jap.header')

@section('content')
<div class="content">

<h2>署名用紙</h2>
<p>この署名用紙を印刷して、所属している教区や共同体で署名を集めることにより、ワンデイトの嘆願への関心を高め、さらなる支援をすることができます。</p>

<p>署名が集まったら、 <a href="{!! url('jap-sign-petition') !!}" class="pg-links">一つの日取りに署名する</a> から登録してください。</p>

<p>この署名用紙を印刷するときは、最後のページが署名を書き入れるシートになっていますので、このページだけを多めにコピーしておくと便利です。</p>

<a href="#" class="pg-links">署名用紙をプリントするにはここをクリックしてください</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection