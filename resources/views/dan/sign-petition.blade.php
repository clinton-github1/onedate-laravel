@extends('layouts/dan.header')

@section('content')
<div class="content">

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">Til Hans Hellighed, Pope Francis<br>
og til alle kirkelige ledere</div>
    
    </div>

    <p>Deres Hellighed, Deres Saligheder, Deres Eminencer, Deres Excellencer og højst ærværdige ledere af alle de kristne kirker,</p>

    <p>Som medlemmer af Guds folk fra mange forskellige kristne kirker, forenet i et ønske om kristen enhed, fremfører vi ydmygt i en ånd af hengiven kærlighed denne begæring om at sikre højtideligholdelsen af påsken på én fælles dato således, at alle kristne kan fejre denne fest i enhed. Vi frembærer ligeledes vor inderlige bøn til Gud for at vor begæring må bære frugt.</p>

    <p>Vi tror, at den nu værende splittelse mellem de kristne kirker er en synd mod Kristus, som bad til Faderen: ”Ikke for dem alene beder jeg, men også for dem, som ved deres ord tror på mig, at de alle må være ét, ligesom du, Fader, i mig og jeg i dig, at de også må være i os, for at verden skal tro, at du har udsendt mig” (Joh 17:20-21). Vi tror, at manglen på synlig enhed forvolder modløshed og respektløshed for kristendommen og leder mange sjæle væk fra Kristus.</p>

    <p>Der er mange hindringer mod denne genforening, men vi tror, der er ét betydningsfuldt skridt, som hverken indebærer moralske eller dogmatiske problemer, men som ikke desto mindre vil være et stort skridt i retning af den mistede enhed: Foreningen af påskedatoerne! Vi tror, at denne handling vil være et afgørende skridt hen imod genforening, en genforening, som vil bevirke, at mange vil komme til tro, og bringe fred til denne hensygnende verden.</p>

    <p>Vi vil bede til Herren om, at han vil hjælpe jer, kirkernes ledere, med at finde den bedste måde til at fuldføre dette vigtige skridt på, og vi vil love at bede for, at det vil lykkes.</p>

    <p>Med oprigtig højagtelse</p>

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
            
            <label for="name">Navn:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">By:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Land:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked>  Venligst kryds denne boks af hvis du vil modtage information om status på underskriftsindsamlingen<br>
            
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
            <input type="submit" name="submit" value="Underskriv">
        
        </form>
    
    </div>
 
</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection