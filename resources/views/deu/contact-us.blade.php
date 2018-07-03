@extends('layouts/deu.header')

@section('content')
<div class="content">

<h1>Kontaktiert Uns</h1>
<p>Füllt das untenstehende Formular aus und sendet uns eure Kommentare / Rückmeldungen.</p>
<div class="contact-form">
    
        <form action="{!! url('contact') !!}" method="post">
            
            {{ csrf_field() }}
            
            
             @if (session()->has('message'))
             <h3>{{ session('message') }}</h3>
             @endif
            
             @if (session()->has('failed'))
             <h3>{{ session('failed') }}</h3>
             @endif
            
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="enter full name"  value="{{ old('Name') }}" required><br>
            <label for="email">E-Mail:</label><br>
            <input type="email" name="email" placeholder="enter valid email address"  value="{{ old('Email') }}"  required><br>
            <label for="message">Eure Nachricht:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required>{{ old('Message') }}</textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="E-Mail senden">
        
        </form>
    
    </div>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection