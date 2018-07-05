@extends('layouts/eng.header')

@section('content')

<div class="content">
<h1>Our sin of division as Christians</h1>
<p>The Resurrection is at the centre of the Christian faith, without it there is no Christianity, however, <b>almost every year Catholics, Protestants and Orthodox celebrate Easter on different dates</b>, some years as much as five weeks apart and other years on the same date.</p>

<p>This division among Christians in celebrating this Feast of Feasts is a great sin and Christians all know that division does not come from God.</p>

<div class="read">
<div class="read-more">

    <h2>Read More</h2>
    <a href="{!! url('diff-dates') !!}" class="pg-links">Why are there different dates for Easter?</a>
    
</div>
<div class="sign-now">

    <h2>Sign Now</h2>
    <a href="{!! url('sign-petition') !!}" class="pg-links">Sign the petition to Celebrate the Feast of Easter all in one date</a>
    
</div>
</div>
</div>



@include('layouts/share.fb_link')
@include('layouts/eng.footer')

@endsection


