@extends('layouts/fran.header')

@section('content')
<div class="content">
    
<h1>Contactez-nous</h1>
<p>Si vous désirez nous envoyer vos commentaires et suggestions, veuillez remplir le formulaire ci-dessous :</p>
<div class="contact-form">
    
        <form action="{!! url('contact') !!}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">Nom:</label><br>
            <input type="text" name="name" placeholder="enter full name"  value="{{ old('Name') }}" required><br>
            <label for="email">Votre adresse de courriel: </label><br>
            <input type="email" name="email" placeholder="enter valid email address"  value="{{ old('Email') }}" required><br>
            <label for="message">Message</label><br>
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
            <input type="submit" name="submit" value="Envoyez votre message">
        
        </form>
    
    </div>
</div>
@include('layouts/share.fb_link')
@include('layouts/fran.footer')
@endsection