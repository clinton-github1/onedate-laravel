@extends('layouts/rus.header')

@section('content')
<div class="content">


<h1>Напишите нам</h1>
<p>Заполните анкету ниже и вышлите нам ваши отзывы</p>
<div class="contact-form">
    
        <form action="{!! url('contact')}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">Имя:</label><br>
            <input type="text" name="name" placeholder="enter full name"  value="{{ old('Name') }}" required><br>
            <label for="email">Эл. почта:</label><br>
            <input type="email" name="email" placeholder="enter valid email address"  value="{{ old('Email') }}" required><br>
            <label for="message">Сообщение:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required>{{ old('Email') }}</textarea>
            
            <span>{!! captcha_img() !!}</span>
              <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>

              <input id="captcha" type="text" class="form-control"  name="captcha" value="{{ old('Captcha') }}"><br>
            
                        @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Вышлите электронное письмо">
        
        </form>
    
    </div>
</div>
@include('layouts/share.fb_link')
@include('layouts/rus.footer')
@endsection