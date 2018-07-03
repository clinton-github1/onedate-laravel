@extends('layouts/chin.header')

@section('content')
<div class="content">

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">致教宗本篤十六<br>
和所有的教會領導</div>
    
    </div>

    <p>聖座，真福，樞機主教、主教、閣下和所有基督教會最可敬的尊榮人士們， </p>

    <p>我們身為各種基督信仰教會裡的天主子民成員，在對基督徒合一的渴望中聯合起來，以孝子的愛心，謙遜地將這個請願書帶到你們面前，為的是要請求能在同一個日期慶祝復活節，好使所有的基督信徒可以彼此相聯地慶祝這個慶日。我們也藉這請願書獻出我們熱誠的祈禱，以實現請個請願。</p> 

    <p>我們相信，目前基督信仰教會之間的分裂是一個違反基督的罪，基督曾祈求天父說：「我不但為他們祈求，而且也為那些因他們的話而信從我的人祈求。願眾人都合而為一！父啊！願他們在我們內合而為一，就如你在我內，我在你內，為叫世界相信是你派遣了我。」(若望福音17:20-21) 我們相信，沒有這肉眼能目睹到的合一，眾人就感到沮喪和對基督信仰不尊敬，並且引領許多人魂遠離基督 </p> 

    <p>M許多障礙抑制了這個重新合一，但是我們相信一個有意義的腳步，它不會造成一些在道德或教義上的阻礙，而是一個朝向失落的合一的一大步：復活節日期的統一！我們相信，這個行動將是一個朝向重新合一決定性的階段 － 這重新合一會引起許多人去相信和將和平帶給這個在病痛中的世界。</p> 

    <p>我們將熱誠地向上主祈禱，求祂將幫助你們 － 教會的負責人，去發現最好的方式完成這個重要的階段，又許諾為這意向祈禱，好使你們能夠成功。</p> 

    <p>真誠恭敬地連署，</p>

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
            
            <label for="name">姓名:</label><br>
            <input type="text" name="name" value="{{ old('Name') }}"  required><br>
            <label for="email">電子郵件:</label><br>
            <input type="email" name="email" value="{{ old('Email') }}" required><br>
            <label for="city">城市:</label><br>
            <input type="text" name="city" value="{{ old('City') }}"  required><br>
            <label for="country">國家:</label><br>
            <input type="text" name="country" value="{{ old('Country') }}"  required><br>
            <input type="checkbox" name="progress" value="checked" required checked> 假如您希望收到這請願後續發展的通知，請勾選<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="簽名">
        
        </form>
    
    </div>
    

</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/chin.footer')
@endsection