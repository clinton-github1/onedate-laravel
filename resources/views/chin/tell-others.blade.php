@extends('layouts/chin.header')

@section('content')
<div class="content">

<h2>送電子郵件給您的朋友們</h2>
<p>協助我們散佈這線上請願資訊給您的朋友們。</p>

<p>建議目的: 為同一日期慶祝復活節投票</p>

<p>訊息主體:</p>
    <p>您好，</p>

<p>為了所有基督教派同一天慶祝復活節的線上請願資訊。 到 <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org/cn/</a>  找更多的資訊和簽名。 </p>

<p>謝謝!!</p>

<p><a href="mailto:?subject=為同一日期慶祝復活節投票&body=您好，%0D%0A %0D%0A 為了所有基督教派同一天慶祝復活節的線上請願資訊。 到 http://www.onedate.org/cn/ 找更多的資訊和簽名。 %0D%0A%0D%0A 謝謝!! &cc=&bcc=" class="pg-links">按這裏</a> 用上述的訊息寄電子郵件。</p>

<h2>教區公佈欄</h2>
<p>詢問您的神父/司鐸是否可以在彌撒後公告消息，或是在教區月誌刊登消息。</p>

  </div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection