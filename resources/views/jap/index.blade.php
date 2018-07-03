@extends('layouts/jap.header')

@section('content')
<div class="content">

<h1>私たちキリスト者の分裂の罪</h1>
<p>キリストの復活は、キリスト教徒の信仰の中心にあるもので、それなしにはキリスト教は存在しません。ところが <b>カトリック教会とプロテスタント教会、そして正教会は、復活祭（復活大祭）をほぼ毎年、違う日に祝っており、</b> ある年には五週間も違っていたり、ある年には同じ日になったりしています。.</p>

<p>この祝祭の中の祝祭を祝うにあたって、キリスト教徒の間に分裂があることは大きな罪です。そしてすべてのキリスト者は、分裂が神から来るものではないことを知っています。</p>

<div class="read">
<div class="read-more">

    <h2>次を読む</h2>
    <a href="{!! url('jap-diff-dates') !!}" class="pg-links">復活祭の日付はどうして違っているのでしょうか？</a>
    
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