@extends('layouts/pol.header')

@section('content')
<div class="content">


<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">Do Jego Świątobliwości, Pope Francis<br>
i do wszystkich przywódców Kościoła</div>
    
    </div>

    <p>Wasza Świątobliwości, Wasze Eminencje, Wasze Ekscelencje i najbardziej Wielebni Dostojnicy Kościołów Chrześcijańskich,</p>

    <p>W duchu synowskiej miłości, my jako członkowie Ludu Bożego z różnych kościołów chrześcijańskich, zjednoczeni w pragnieniu jedności Chrześcijan, zanosimy Wam pokornie tę petycję, ażeby zapewnić celebrowanie Wielkanocy w jednej wspólnej dacie,  tak aby wszyscy Chrześcijanie mogli obchodzić to święto zjednoczeni. Razem z tą petycją zanosimy żarliwą modlitwę o jej wysłuchanie.</p>

    <p>Wierzymy w to, że obecny podział pomiędzy kościołami chrześcijańskimi jest grzechem przeciwko Chrystusowi, który modlił się do Ojca: 'Nie tylko za nimi proszę, ale i za tymi, którzy dzięki ich słowu będą wierzyć we Mnie; aby wszyscy stanowili jedno, jak Ty, Ojcze, we Mnie, a Ja w Tobie, aby i oni stanowili w Nas jedno, aby świat uwierzył, żeś Ty Mnie posłał.' (J 17:20-21). Wierzymy, że ten widoczny brak jedności powoduje niesmak i brak szacunku dla Chrześcijaństwa oraz oddala od Chrystusa wiele dusz.</p>

    <p>Wiele przeszkód stoi na drodze temu zjednoczeniu, jednak wierzymy że jest jeden istotny krok przeciwko któremu nie ma żadnych moralnych lub dogmatycznych przeszkód, a który będzie znaczącym krokiem ku jedności: Zjednoczenie Dat Wielkanocy! Wierzymy, że ten akt będzie decydującym krokiem w kierunku zjednoczenia, zjednoczenia które przyprowadzi wielu do wiary i przyniesie pokój na ten cierpiący świat.</p>

    <p>Będziemy modlić się żarliwie do Pana, żeby pomógł Wam, dostojnikom kościołów, znaleźć najlepszą drogę żeby osiągnąć ten ważny krok i zobowiązujemy się modlić za to, żeby Wam się to udało.</p>

<p>Szczerzy i oddani,</p>

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
            
            <label for="name">Imię i nazwisko:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name')}}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Miejscowość:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Kraj:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Proszę zaznacz, jeżeli chcesz być informowany/a o postępach w sprawie tej petycji<br>
            
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
            <input type="submit" name="submit" value="Głosuj">
        
        </form>
    
    </div>
    
</section>
</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection