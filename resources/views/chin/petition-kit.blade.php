@extends('layouts/chin.header')

@section('content')
<div class="content">
<h2>請願書</h2>
<p>藉由下面印出的請願書和在您的教區善會收集的簽名，您可更進一步幫助提升合一的請願</p>

<p>在您已收集好簽名後，然後您需要進到這個 <a href="{!! url('ch-sign-petition') !!}" class="pg-links">為合一日期投票</a> 網頁。</p>

<p>一旦您已印出請願書，印出最後一頁的簽名資訊它是有用的</p>

<a href="#" class="pg-links">按這裏印出請願書。</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection