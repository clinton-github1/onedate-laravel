@extends('layouts/deu.header')

@section('content')
<div class="content">
    
<section class="petition">

<div class="petition-address">
    
    <h1>Unterschreiben Sie bitte Die Petition</h1>
    
    <div class="petition-add">An Seine Heiligkeit, Papst Franziskus<br>
und an alle Kirchenführer</div>
    
    </div>

<p>Eure Heiligkeit, Eure Seligkeiten, Eure Eminenzen, Eure Exzellenzen und hochgeschätzte Würdenträger aller christlichen Kirchen, in einem Geist kindlicher Liebe tragen wir, Mitglieder aus dem Volk Gottes aus einer Vielzahl christlicher Kirchen, vereint im Wunsch nach der christlichen Einheit, demütig vor Sie alle diese Petition, um die Feier des Osterfestes an einem gemeinsamen Datum zu erlangen, damit alle Christen dieses Fest in Einigkeit feiern mögen. Mit dieser Petition bieten wir Ihnen auch unser inständiges Gebet für die Erfüllung dieser Petition an.</p>

<p>Wir glauben, dass die gegenwärtige Spaltung zwischen den christlichen Kirchen eine Sünde gegen Christus ist, der zum Vater gebetet hat: „Aber ich bitte nicht nur für diese hier, sondern auch für alle, die durch ihr Wort an mich glauben. Alle sollen eins sein: Wie du, Vater, in mir bist und ich in dir bin, sollen auch sie in uns sein, damit die Welt glaubt, dass du mich gesandt hast.“ (Joh 17, 20-21). Wir glauben, dass dieser Mangel einer sichtbaren Einheit Bestürzung und Respektlosigkeit der Christenheit gegenüber verursacht, und viele Seelen von Christus weg führt.</p>

<p>Viele Hindernisse blockieren diese Wiedervereinigung. Wir glauben jedoch, dass es einen bedeutsamen Schritt gibt, welcher weder moralische noch dogmatische Hindernisse aufzeigt, sondern ein bedeutender Schritt sein wird, die verlorene Einheit voranzubringen: Die Vereinheitlichung der Osterdaten! Wir glauben, dass diese Tat ein maßgebender Schritt zur Wiedervereinigung sein wird, einer Wiedervereinigung, die viele dazu bringen wird, zu glauben und die Frieden in diese leidende Welt bringen wird.</p>

<p>Wir werden innig beten, dass der Herr Ihnen, den Würdenträgern der Kirchen, helfen wird, den besten Weg zu finden, um diesen wichtigen Schritt zu verwirklichen und versprechen Ihnen allen, dafür zu beten, dass Sie erfolgreich sein werden.</p>

<p>Hochachtungsvoll und ehrerbietig</p>
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
            
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">E-Mail:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Stadt/Ort::</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Land:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Kreuzt bitte nebenstehendes Feld an, wenn ihr wünscht über den Fortschritt der Petition informiert zu werden<br>
            
            <span>{!! captcha_img() !!}</span>
              <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>

              <input id="captcha" type="text" class="form-control"  name="captcha" value="{{ old('Captcha') }}"><br>
            
                        @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Abstimmen">
        
        </form>
    
    </div>
   
</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection