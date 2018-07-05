@extends('layouts/hung.header')

@section('content')
<div class="content">
    

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">Őszentsége XVI. Benedek pápának <br>
és minden Egyházi Vezetőnek</div>
    
    </div>

    <p>Mélyen Tisztelt Méltóságos, Eminenciás és Excellenciás Urak, illetve a Keresztény Egyházak nagyra becsült Vezetői! </p>

    <p>A gyermeki szeretet alázatos lelkületével terjesztjük Önök elé ezt a petíciót. Mi mint Isten népének különböző keresztény egyházakhoz tartozó tagjai, akiket összeköt a keresztények egysége iránti vágy, a Húsvét ünnepének közös időpontját kérjük, hogy minden keresztény egységben ünnepelhessen. A petícióval együtt buzgó imádságunkat is felajánljuk a petíció céljának megvalósulásáért.</p> 

    <p>Hisszük, hogy a keresztény egyházak között jelenleg fennálló szakadás bűn Krisztus ellen, aki így imádkozott az Atyához: „De nemcsak értük könyörgök, hanem azokért is, akik a szavukra hinni fognak bennem. Legyenek mindnyájan egyek. Amint te, Atyám bennem vagy s én benned, úgy legyenek ők is eggyé bennünk, hogy így elhiggye a világ, hogy te küldtél engem.” (Jn 17,20-21) Hisszük, hogy a látható egység hiánya a kereszténységgel szembeni csalódáshoz és kiábrándultsághoz vezet és sok lelket eltávolít Krisztustól.</p> 

    <p>Számos akadály áll ennek az újraegyesítésnek az útjában, de hisszük, hogy létezik egy olyan jelentőségteljes lépés, amely nem jelent sem erkölcsi, sem dogmatikai akadályt, ugyanakkor mégis egy fontos lépés az elveszett egység felé: ez a Húsvét Dátumainak egyesítése! Hisszük, hogy ez egy döntő lépést jelent azon egység felé, amely sokakban hitet fog ébreszteni és békét hoz ennek a küszködő világnak.</p> 

    <p>Buzgón fogunk imádkozni az Úrhoz, hogy segítse meg Önöket, az egyházak vezetőit, hogy megtalálják a legmegfelelőbb módot ennek a fontos lépésnek a megtételére és imáinkról biztosítjuk Önöket, hogy sikeresen meg is tegyék azt.</p> 

    <p>Őszinte tisztelettel:</p>

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
            
            <label for="name">Név:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">E-mail:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Város/Helység:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Ország:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Szeretnék tájékoztatást kapni a kezdeményezés alakulásáról.<br>
            
            <span>{!! captcha_img() !!}</span>
              <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>

              <input id="captcha" type="text" class="form-control"  name="captcha" value="{{ old('Captcha') }}"><br>
            
                        @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
<!--
            <label for="country">Verify:</label><br><input type="submit" value="Szavazok">
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Szavazok">
        
        </form>
    
    </div>
    
</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection