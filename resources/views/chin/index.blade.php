@extends('layouts/chin.header')

@section('content')
<div class="content">

<h1>我們身為基督信徒所造成分裂的罪</h1>
<p>復活是基督徒信仰的中心，沒有復活就沒有基督宗教，然而，<b> 幾乎每一年天主教，基督教和東正教在不同的日期慶祝復活節</b>, 有些年復活節相距五星期之久。</p>

<p>基督信徒慶祝復活節日的分裂是一個極大的罪，基督徒知道這個分裂不是從天主而來的。</p>

<div class="read">
<div class="read-more">

    <h2>閱讀更多 </h2>
    <a href="{!! url('ch-diff-dates') !!}" class="pg-links">為什麼有不同的復活節?</a>
    
</div>
<div class="sign-now">

    <h2>現在就簽名</h2>
    <a href="{!! url('ch-sign-petition') !!}" class="pg-links">為同一日期慶祝復活節簽名</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection