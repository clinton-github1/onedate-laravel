@extends('layouts/czech.header')

@section('content')
<div class="content">


<h1>Rozdělení křesťanů je náš hřích</h1>
<p>Vzkříšení je centrem křesťanské víry, bez něho není křesťanství, <b>témeř každý rok katolíci, protestanté a pravoslavní slaví Velikonoce v odlišných termínech,</b>, v některých letech dokonce v rozdílu 5 týdnů, v jiných letech ve stejném termínu.</p>

<p>Rozdělení křesťanů ve slavení Velikonoc je veliký hřích a všichni křesťané vědí, že rozdělení nepochází od Boha.</p>

<div class="read">
<div class="read-more">

    <h2>Číst více</h2>
    <a href="{!! url('cz-diff-dates') !!}" class="pg-links">Proč jsou různá data Velikonoc?</a>
    
</div>
<div class="sign-now">

    <h2>Hlasovat nyní</h2>
    <a href="{!! url('cz-sign-petition') !!}" class="pg-links">Hlasujte pro společné slavení Velikonoc všichni v jednom termínu</a>
    
</div>
</div>

@include('layouts/share.fb_link')
@include('layouts/czech.footer')
@endsection