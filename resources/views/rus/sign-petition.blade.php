@extends('layouts/rus.header')

@section('content')
<div class="content">


<section class="petition">

<div class="petition-address">
    
    <div class="petition-add"></div>
    
    </div>

<p>Ваше Священство, Ваши Блаженства, Ваши Превосходительства и Священнослужители всех христианских Церквей!</p>

<p>Мы, представители народа Божьего из различных христианских Церквей и объединенные общим желанием христианского единства, в духе братской любви обращаемся к вам с просьбой о том, чтобы вы сделали всё возможное для того, чтобы Пасха праздновалась всеми христианами в один и тот же день. Мы горячо молимся об осуществлении этой просьбы.</p>

<p>Мы верим, что настоящее разделение в христианских Церквях является грехом против Христа, Который молился Своему Отцу словами «Не о них же только молю, но и о верующих в Меня по слову их, да будут все едино, как Ты, Отче, во Мне, и Я в Тебе, так и они да будут в Нас едино, – да уверует мир, что Ты послал Меня.» (Иоан. 17:20-21). Мы считаем, что отсутствие видимого единства является причиной разногласий отсутствия уважения к христианской вере и препятствует тому, чтобы многие души пришли ко Христу.</p>

<p>На пути единства имеется много препятствий, но мы верим, что важным шагом, не представляющим к тому же каких-либо моральных или догматических препятствий было бы объединение дня Пасхи! Этот шаг был бы решительным шагом на пути к единству, укреплению веры и мира в этом разрозненном мире.</p>

<p>Мы молимся о том, чтобы Господь помог Вам и всем руководителям Церквей найти лучший путь для осуществления этого важного шага.</p>

<p>Искренне и с уважением,</p>

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
            
            <label for="name">Имя:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">Эл. почта:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Город:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Страна:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Щелкните в этой клеточке, если вы хотите, чтобы мы высылали вам информацию относительно продвижения данного Обращения<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Подпишите">
        
        </form>
    
    </div>

</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/rus.footer')
@endsection