@extends('layouts/ned.header')

@section('content')
<div class="content">


<h1>Contacteer ons</h1>
<p>Vul onderstaand formulier in en zend ons uw opmerkingen/reactie</p>
<div class="contact-form">
    
        <form action="{!! url('contact') !!}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">Naam:</label><br>
            <input type="text" name="name" placeholder="enter full name"  value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address"  value="{{ old('Email') }}" required><br>
            <label for="message">Boodschap:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%"  required>{{ old('Message') }}</textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Verzend E-mail">
        
        </form>
    
    </div>
</div>
@include('layouts/share.fb_link')
@include('layouts/ned.footer')
@endsection