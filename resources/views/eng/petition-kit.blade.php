@extends('layouts/eng.header')

@section('content')
<div class="content">

<h2>Petition Kit</h2>
<p>You can further help raise awareness of the OneDate Petition by printing off the petition kit below and gathering signatures in your local parish/community.</p>

<p>After you have gathered the signatures you will then need to enter these in to the <a href="{!! url('sign-petition') !!}" class="pg-links">sign the petition</a> page.</p>

<p>Once you have printed off the petition kit it may then be usefull to print a larger number of just the last page which is the signature sheet.</p>

<a href="#" class="pg-links">Click here to print the petition kit.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/eng.footer')

@endsection