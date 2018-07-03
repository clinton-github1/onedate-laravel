@extends('layouts/czech.header')

@section('content')
<div class="content">

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">Jeho Svatosti papeži Františkovi<br>
a všem církevním představeným</div>
    
    </div>

    <p>Vaše Svatosti, Vaše Eminence, Vaše Excelence a nejdůstojnější představení všech křesťanských církví, </p>

    <p>jakožto zástupci Božího lidu z různých křesťanských církví sjednocených v touze po jednotě křesťanů v pokoře přinášíme v duchu synovské lásky tuto petici za slavení Velikonočních svátků v jednom datu, aby tak mohli všichni křesťané slavit tento svátek v jednotě. S touto peticí také přinášíme svou vroucí modlitbu za její naplnění.</p> 

    <p>Věříme, že dnešní rozdělení mezi křesťanskými církvemi, je hříchem proti Kristu, který prosil Otce: "Neprosím však jen za ně, ale i za ty, kteří skrze jejich slovo ve mne uvěří; aby všichni byli jedno jako ty, Otče, ve mně a já v tobě›, aby i oni byli v nás, aby tak svět uvěřil, že ty jsi mě poslal." (Jan 17,20-21). Věříme, že tento nedostatek viditelné jednoty je příčinou beznaděje a neúcty ke křesťanství, a že odvádí mnoho duší od Krista.</p> 

    <p>Opětovnému sjednocení brání mnoho překážek, ale my věříme, že je zde jeden podstatný krok, který nezahrnuje dogmatické či morální rozdíly, ale přesto bude hlavním krokem směrem ke znovunabytí ztracené jednoty: jednotné datum Velikonoc! Jsme přesvědčeni, že to bude rozhodujícím krokem ke znovunabytí jednoty, té jednoty, která přitáhne mnohé k víře a přinese pokoj tomuto sužovanému světu.</p> 

    <p>Vroucně se modlíme k Pánu, aby pomohl vám, církevním představeným, najít nejlepší způsob, jak dosáhnout tohoto důležitého kroku. Ujišťujeme vás, že se modlíme za váš úspěch v této věci.</p> 

    <p>V úctě</p>

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
            
            <label for="name">Jméno:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Město:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Země:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country')}}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> PZaškrtněte tuto kolonku, pokud chcete být informováni o vývoji této petice<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="SIGNUP">
        
        </form>
    
    </div>
    
</section>
@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection