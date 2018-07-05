@extends('layouts/ita.header')

@section('content')
<div class="content">
    


<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">A Sua Santità, Pope Francis<br>
e a tutti i capi delle Chiese</div>
    
    </div>

    <p>Sua Santità, Vostre Beatitudini, Vostre Eminenze, Vostre Eccellenze e Reverendissimi Dignitari di tutte le Chiese cristiane,  </p>

    <p>In spirito di amore filiale, noi, come membri del Popolo di Dio provenienti da diverse chiese cristiane e mossi da un comune desiderio di unità cristiana, ci permettiamo umilmente presentare questa petizione per richiedere la possibilità di celebrare la Pasqua in una stessa data affinché tutti i cristiani possano vivere questa festa nell'unità. Con questa petizione presentiamo anche la nostra ardente preghiera per la realizzazione dello scopo di questa petizione. </p> 

    <p>Noi crediamo che l'attuale scisma tra le chiese cristiane rappresenti un peccato contro Cristo che pregava il Padre: 'Non prego solo per questi, ma anche per quelli che per la loro parola crederanno in me; perché tutti siano una sola cosa. Come tu, Padre, sei in me e io in te, siano anch'essi in noi una cosa sola, perché il mondo creda che tu mi hai mandato.' (Gv 17, 20-21). Noi crediamo che questa mancanza visibile di unità causi costernazione e irriverenza nei confronti della cristianità e conduca molte anime lontane da Cristo.</p> 

    <p>Molti ostacoli inibiscono questa riunificazione ma crediamo si possa fare un passo significativo che non presenti ostacoli morali o dogmatici ma che, tuttavia, rappresenti un grande passo verso la perduta unità: L'unificazione delle Date di Pasqua! Siamo fermamente convinti che questo sia un passo decisivo verso la riunificazione, una riunificazione che porterà molti a credere e porterà pace in questo mondo malato. </p> 

    <p>Pregheremo ardentemente il Signore perché aiuti loro, dignitari delle chiese, a trovare il modo migliore per il raggiungimento di questo primo importante traguardo e assicuriamo di pregare perché la loro missione si concluda con successo. </p> 

    <p>Con ossequiosa devozione,</p>

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
            
            <label for="name">Nome:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Citta:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Paese:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Clicca in questo riquadro se desideri essere informato sui progressi della petizione<br>
            
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
            <input type="submit" name="submit" value="Vota">
        
        </form>
    
    </div>
    
</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection