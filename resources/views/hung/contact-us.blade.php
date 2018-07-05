@extends('layouts/hung.header')

@section('content')
<div class="content">
    
<h1>Kapcsolat</h1>
<p>Töltsétek ki az alábbi űrlapot, és küldjétek el a megjegyzéseiteket / visszajelzéseiteket</p>
<div class="contact-form">
    
        <form action="{!! url('contact') !!}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">Név:</label><br>
            <input type="text" name="name" placeholder="enter full name"  value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address"  value="{{ old('Email') }}" required><br>
            <label for="message">Üzenet: </label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required>{{ old('Message') }}</textarea>
            
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
            <input type="submit" name="submit" value="E-mail küldése">
        
        </form>
    
    </div>
</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection