@extends('layouts/ita.header')

@section('content')
<div class="content">
    


<h2>Documenti per la Petizione</h2>
<p>Puoi ulteriormente aiutarci ad aumentare la visibilità della Petizione Unica Data, stampando la documentazione qui sotto e raccogliendo le firme nella tua parrocchia/comunità.</p>

<p>Dopo aver raccolto le firme, dovrai registrarle nella pagina <a href="{!! url('ita-sign-petition') !!}" class="pg-links"> Vota per Un’Unica Data</a>.</p>

<p>Una volta stampata la documentazione, potrà essere utile stampare più copie soltanto dell’ultima pagina ovvero il foglio della raccolta delle firme.</p>

<a href="#" class="pg-links">Cliccare qui per stampare i documenti della petizione ..</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/ita.footer')
@endsection