@extends('layouts/chin.header')

@section('content')
<div class="content">

<p>當耶穌看到基督信徒差不多每年都慶祝兩次祂的苦難、聖死與復活時，耶穌便以神祕的方式受苦，因為祂看到在祂的「家庭」裡有如此這樣的分裂，而祂卻是為了要使眾人成為一個「家庭」才為這個「家庭」喪身和受苦的。</p>

<p>對這網站的讀者來說，作一些他／她自己感興趣的探討，去明白現有兩個復活節日期存在的原因，這是會有幫助。然而，這網站的主要目標是要發揮出槓桿作用，將有關基督奧體的子民、教會，以及採取行動的渴望，都一一表明清楚，以致有所改變。那改變是被視為走向教會合一的一步。</p>

<div class="read">
<div class="read-more">

    <h2>閱讀更多</h2>
    <a href="{!! url('ch-why-one-date') !!}" class="pg-links">為什麼要為同一天慶祝復活節來簽名?</a>
    
</div>
<div class="sign-now">

    <h2>現在就簽名</h2>
    <a href="{!! url('ch-sign-pettiton') !!}" class="pg-links">為同一日期慶祝復活節簽名</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection