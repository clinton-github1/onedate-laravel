@extends('layouts/jap.header')

@section('content')
<div class="content">
    
<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">教皇ベネディクト十六世聖下 <br>
すべての教会のリーダーの方々</div>
    
    </div>

    <p>教皇聖下、総主教聖下、枢機卿猊下、大司教閣下、尊敬申し上げるすべてのキリスト教会の高位の方々 

        孝愛の霊のうちに、私たちは様々なキリスト教会からの神の民の一員として、キリスト者の一致という念願のうちに結束しております。そして、すべてのキリスト者が復活祭の祝日を一致のうちに祝うことができるように、この祝祭を共通の一つの日取りにするというこの嘆願を謹んで御前に持参します。また私たちは、この嘆願とともに、この願いの実現にむけた熱烈な祈りを捧げます。</p>

        <p>キリスト教会のあいだに現存する分裂は、次のように御父に祈られたキリストに反する罪だと私たちは信じています。「また、彼らのためだけではなく、彼らの言葉によってわたしを信じる人々のためにも、お願いします。父よ、あなたがわたしの内におられ、わたしがあなたの内にいるように、すべての人を一つにしてください。彼らもわたしたちの内にいるようにしてください。そうすれば、世は、あなたがわたしをお遣わしになったことを、信じるようになります」（ヨハネ17:20-21）。この目に見える一致の不足が、キリスト教に対する失望と軽視の原因となり、多くの霊魂をキリストから遠ざけていると私たちは信じています。</p>

        <p>この再一致を妨げる多くの障害がありますが、私たちは一つの特筆すべき方策があることを信じています。それは、道徳的あるいは教義的な障壁ではないにもかかわらず、失われた一致のための大きな一歩となるであろう方法、復活祭の日付の一致です！ 私たちは、この行動が、この病める世界へ平和をもたらし、多くの人々を信仰へと導くであろう再一致へと向けた、決定的な方法となることを信じています。</p>

        <p>教会の高位にあられる貴殿が、この重要な方策を実現する最善の方法を見出すため、主が助けてくださるよう、私たちは熱烈に主に祈ります。わたしたちは貴殿が成功を収めることができるように祈ることを、固く誓うものです。</p>

<p>敬具</p>

</section>
<section class="petition2">

    <div class="petition-form">
    
        <form action="{!! url('petition') !!}" method="post">
            
             {{ csrf_field() }}
            
            
             @if (session()->has('message-petition'))
             <h3>{{ session('message-petition') }}</h3>
             @endif
            
             @if (session()->has('failed-petition'))
             <h3>{{ session('failed-petition') }}</h3>
             @endif
            
            <label for="name">氏名:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">メールアドレス:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">市町村名:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">国名:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country')}}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> 署名の進捗状況を知らせて欲しい方は、このチェックボックスにチェックを入れてください。<br>
            
            <span>{!! captcha_img() !!}</span>
              <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>

              <input id="captcha" type="text" class="form-control"  name="captcha"><br>
            
                        @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="署名する">
        
        </form>
    
    </div>

</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection