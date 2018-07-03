@extends('layouts/gre.header')

@section('content')
<div class="content">
    
<section class="link-to-us">

    <h1>Συνδεθείτε μαζί μας</h1>
    <p>Παρακαλώ χρησιμοποιήστε μια από τις παρακάτω συνδέσεις για να έρθετε σε επικοινωνία μαζί μας. (Παρακαλώ, αντιγράψτε τις εικόνες στον υπολογιστή σας).</p>   
    
    <div class="links">
    
        <div class="lnk-img"><a href="{!! url('gre-index') !!}" class="pg-links"><img src="{{ URL::asset('images/onedate.jpg') }}" alt="home page link image"></a></div>
        <p><a href="{!! url('gre-index') !!}" class="pg-links">OneDate.org - Ψηφίστε για κοινή ημερομηνία του εορτασμού του Πάσχα</a></p>
            <p>Κάντε ένα μικρό βήμα προς αυτή την κατεύθυνση <a href="{!! url('gre-index') !!}" class="pg-links"> Χριστιανική Ενότητα</a>.  Ψηφίστε για κοινή ημερομηνία του εορτασμού του Πάσχα.</p>
        
        <p> Αίτηση ιστοσελίδας <a href="{!! url('gre-index') !!}" class="pg-links"> για κοινή ημερομηνία του Πάσχα.</a>.</p>
    
    </div>


</section>

</div>
@include('layouts/share.fb_link')
@include('layouts/gre.footer')
@endsection