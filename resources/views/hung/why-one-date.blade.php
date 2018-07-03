@extends('layouts/hung.header')

@section('content')
<div class="content">
    



<h1>Miért fontos a közös Húsvéti dátum?</h1>
<p>Egyszerűen azért, mert mindnyájan egyetlen Keresztény családot alkotunk, és ebben a fontos kérdésben mégis megosztottak vagyunk. A megosztottság pedig bűn. Ha még a Feltámadás Ünnepét sem tudjuk együtt ünnepelni, hogyan remélhetjük, hogy a Béke és az Egység jelévé válunk a világban?</p>

<p>“'Testvérek, Urunk, Jézus Krisztus nevére kérlek titeket, éljetek mindnyájan egyetértésben, ne szakadjatok pártokra, legyetek egyek ugyanabban a lelkületben, ugyanabban a felfogásban.'” (1 Kor 1, 10)</p>

<p>“De ő átlátott rajtuk, azért ezt mondta nekik: <b style="color:#ea1951"> Minden önmagával meghasonlott ország elpusztul, és ház házra omlik.”</b>(Lk 11,17)</p>

<p><b style="color:#ea1951">“'De nemcsak értük könyörgök, hanem azokért is, akik a szavukra hinni fognak bennem. Legyenek mindnyájan egyek. Amint te, Atyám bennem vagy s én benned, úgy legyenek ők is eggyé bennünk, hogy így elhiggye a világ, hogy te küldtél engem.'” </b> (Jn 17, 20 - 21)</p>

<p>“'Aki tehát tudna jót tenni, de nem tesz, bűnt követ el.'” (Jak 4, 17)</p>
<div class="read">
<div class="read-more">

    <h2>Tovább olvasom</h2>
    <a href="{!! url('hung-what-can-we-do') !!}" class="pg-links">Mit tehetünk mi?</a>
    
</div>
<div class="sign-now">

    <h2>Most aláírom</h2>
    <a href="#" class="pg-links">Aláírásomat adom, hogy egy időpontban ünnepeljük a Húsvétot</a>
    
</div>
</div>
</div>
@include('layouts/share.fb_link')
@include('layouts/hung.footer')
@endsection