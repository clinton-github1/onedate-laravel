@extends('layouts/jap.header')

@section('content')
<div class="content">

<p>キリスト教徒がイエスの受難と死と復活を、ほぼ毎年二度記念しているのをごらんになり、イエスは神秘的な領域において苦しんでおられます。なぜなら、イエスは皆を一つの家族とするために苦しまれ死なれたのに、その家族がこのように分裂しているからです。</p>

<p>このサイトは、復活祭（復活大祭）にはなぜ二つの日付が存在するのか、個人的に興味を持って調べている人々にとっても役に立つかもしれません。しかしながらこのサイトのおもな目的は、キリストの神秘体である教会を構成する人々が、変革の力として、役割を果たすことを求めているという証言を提供することにあります。この変革には、キリスト者の一致への第一歩としての期待が込められています。</p>

<div class="read">
<div class="read-more">

    <h2>次を読む</h2>
    <a href="{!! url('jap-why-one-date') !!}" class="pg-links">復活祭を一つの日に祝うために署名するのはなぜでしょうか？</a>
    
</div>
<div class="sign-now">

    <h2>署名する</h2>
    <a href="{!! url('jap-sign-petition') !!}" class="pg-links">復活祭を皆が一つの日に祝うための嘆願に署名する</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection