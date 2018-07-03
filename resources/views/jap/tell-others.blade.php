@extends('layouts/jap.header')

@section('content')
<div class="content">
    
 
<h2>友人にメールを送る</h2>
<p>下記のこの署名を紹介するメッセージを友人にメールしていただき、広めてくださるようにご協力をお願いします。</p>

<p>件名: 復活祭の日付を一つの日に祝うことに署名する</p>

<p>メッセージ本文:</p>
    <p>Hi,</p>

<p>こんにちは。すべての教派のキリスト教徒が復活祭を同じ日に祝うために、インターネットで署名を集めているサイトがあります。 詳しい情報と署名はこちら<a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> </p>

<p>ありがとうございます。</p>

<p><a href="mailto:?subject=Sign the Petition to Celebrate the Feast of Easter all in one date&body=Hi%0D%0A %0D%0A こんにちは。すべての教派のキリスト教徒が復活祭を同じ日に祝うために、インターネットで署名を集めているサイトがあります。 詳しい情報と署名はこちら http://www.onedate.org %0D%0A%0D%0Aありがとうございます&cc=&bcc=" class="pg-links">ここをクリック</a> すると、コンピュータの標準メールアプリケーションが起動して、上記の件名とメッセージ本文が入力された新規メッセージが立ち上がります。</p>

<h2>教会報について</h2>
<p>所属する教会の神父や牧師に、この署名についてミサや礼拝中にアナウンスしてもらえるよう、またもし可能であれば、教会報に掲載してもらえるように依頼してください。</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection