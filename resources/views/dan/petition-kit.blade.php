@extends('layouts/dan.header')

@section('content')
<div class="content">

<h2>Papir udgave</h2>
<p>Du kan hjælpe med at sprede kendskabet til "En Dato" (Onedate.org) underskriftsindsamlingen ved at printe papir udgaven og indsamle underskrifter i din lokale menighed.</p>

<p>Efter at du har samlet underskrifterne, kan du indtaste dem på <a href="{!! url('dan-sign-petition') !!}" class="pg-links"> "Underskriv" </a> siden.</p>

<a href="#" class="pg-links">Klik her for at udprinte Papir udgave.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/dan.footer')
@endsection