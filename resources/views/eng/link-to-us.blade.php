@extends('layouts/eng.header')

@section('content')
<div class="content">
<section class="link-to-us">

    <h1>Link to us</h1>
    <p>Please use one of the links below to link to us (Please copy the pictures to your own server).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('index') !!}" class="pg-links">OneDate.org - Sign the Petition to Celebrate the Feast of Easter all in one date</a></p>
            <p>Take a small step towards <a href="{!! url('index') !!}" class="pg-links">Christian Unity</a>. Sign the Petition to Celebrate the Feast of Easter all in one date.</p>
        
        <p> Web site petition for the <a href="{!! url('index') !!}" class="pg-links">unity of Easter date</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/eng.footer')

@endsection